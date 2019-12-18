<?php

namespace DFSClientV3\Models;
use DFSClientV3\Bootstrap\Application;
use DFSClientV3\Services\EntityCreator\ClassGenerator;
use DFSClientV3\Services\Logger\Logger;

class DataMapper
{

    /**
     * @var string
     */
    protected $className;

    /**
     * @var string
     */
    protected $json;

    /**
     * @var Application
     */
    protected $applications;

    /**
     * @var $requestStatus
     */
    protected $requestStatus;

    /**
     * @var string $pathToMainData
     */
    protected $pathToMainData;

    /**
     * @var Logger
     */
    protected $logger = false;

    /**
     * Caution: This variable is persist and accumulates data. (All recursive executions have access to it.)
     *
     * @var array
     */
    private $notExistedField = [];

    /**
     * Caution: This variable is persist and accumulates data. (All recursive executions have access to it.)
     *
     * For example: response has same structure
     *
     * tasks->0.1...params->api_params
     * params field not existed in DFS response, but has child fields in Entity.
     * `rootNotReturnedFieldsFromDFS` will contain only one field: params. Because it is root field.
     *
     * @var array persist variable
     */
    private $rootNotReturnedFieldsFromDFS = [];

    /**
     * DataMapper constructor.
     * @param string $className
     * @param bool $requestStatus
     * @param string $pathToMainData
     */
    public function __construct(string $className, bool $requestStatus, string $pathToMainData)
    {
        $this->className = $className;
        $this->applications = Application::getInstance();
        $this->requestStatus = $requestStatus;
        $this->pathToMainData = $pathToMainData;

        if (isset($this->applications->getConfig()['logger']['run']) and $this->applications->getConfig()['logger']['run'] === true)
            $this->logger = new Logger();
    }

    /**
     * @param string $json
     * @param string|null $classSuffix
     * @param bool $resultCanBeTransformedToArray
     * @param bool $mustbeAsCollection
     * @return array
     */
    public function paveData(string $json, ?string $classSuffix, ?bool $resultCanBeTransformedToArray = true, bool $mustbeAsCollection = false)
    {

        $model = null;
        $classNameWithNameSpace = null;

        if ($this->className === 'GetAdvancedSerpResultsById')
            return $this->paveAdvancedData($json, $classSuffix, $resultCanBeTransformedToArray, $mustbeAsCollection);

        //$config = $this->applications->getConfig();
        $decodedResponse = json_decode($json);
        $nameSpace = 'DFSClientV3\Entity\Custom';


            if ($classSuffix !== null && class_exists($nameSpace.'\\'.$this->className.$classSuffix) ){
                $classNameWithNameSpace = $nameSpace.'\\'.$this->className.$classSuffix;
                $model = new $classNameWithNameSpace();
            }

            if ($classSuffix === null && class_exists($nameSpace.'\\'.$this->className.'EntityMain')){

                $classNameWithNameSpace = $nameSpace.'\\'.$this->className.'EntityMain';
                $model = new $classNameWithNameSpace($this->requestStatus, $this->pathToMainData);
                $classSuffix = 'EntityMain';
                $this->notExistedField = []; // this variable will be contain persist data, from all recursion iteration.
            }

        $arrayWithResults = [];
        $notMappedObjectVars = ($mustbeAsCollection === true) ? [] : get_class_vars($classNameWithNameSpace);

        foreach ($decodedResponse as $key => $value)
        {
            if ($mustbeAsCollection){
                $arrayWithResults[$key] = $this->paveData(json_encode($value), $classSuffix, $resultCanBeTransformedToArray);
            } elseif (is_object($model) && property_exists($model, ClassGenerator::validateClassField($key))){
                // kostyl
                if ($key == 'tasks' or $key == 'result' && $resultCanBeTransformedToArray)
                    $value = (array)$value;

                if (is_object($value) || is_array($value) && $obj = ClassGenerator::arrayContainObject($value)) {
                    if (is_object($value)) {
                       $model->$key = $this->paveData(json_encode($value), $classSuffix.ucfirst($key), $resultCanBeTransformedToArray);
                    } elseif (is_array($value) && $obj = ClassGenerator::arrayContainObject($value)) {
                       $model->$key = $this->paveData(json_encode($value), $classSuffix.ucfirst($key), $resultCanBeTransformedToArray, true);
                    }
                }else {
                    if ($key !== 'version')
                        $model->$key = $value;
                }
                unset($notMappedObjectVars[ClassGenerator::validateClassField($key)]);
            }else{
                $this->notExistedField[$classNameWithNameSpace][$key]['file'] = $classNameWithNameSpace;
                $this->notExistedField[$classNameWithNameSpace][$key]['field'] = $key;
                $this->notExistedField[$classNameWithNameSpace][$key]['type'] = gettype($value);
            }
        }


        $returnModel = $this->paveDummyData($classNameWithNameSpace, $notMappedObjectVars, $model);

        if ($classSuffix === 'EntityMain' && $this->logger !== false){
            $this->logChanges($returnModel, $decodedResponse, $classNameWithNameSpace);
        }

        if ($mustbeAsCollection) return $arrayWithResults;

        if (!$mustbeAsCollection) return $returnModel;
    }


    /**
     * @param string $classNameWithNameSpace
     * @param array $notMappedProperty
     * @param $model
     * @param bool $isRootField
     * @return mixed
     * @throws \ReflectionException
     */
    public function paveDummyData(string $classNameWithNameSpace, array $notMappedProperty, $model, $isRootField = true)
    {
        if (!empty($notMappedProperty)){

            $reflected = new \ReflectionClass($model);
            foreach ($notMappedProperty as $propertyName => $propertyVal){

                $belongClassNameWithNameSpace = $classNameWithNameSpace.ucfirst($propertyName);

                if ($isRootField)
                    $this->rootNotReturnedFieldsFromDFS[$classNameWithNameSpace][$propertyName] = $propertyName;

                if (class_exists($belongClassNameWithNameSpace)){

                    $isRootField = false;
                    $isCollection = false;
                    $docBlock = $reflected->getProperty($propertyName)->getDocComment();

                    if (strpos($docBlock, str_replace('DFSClientV3\Entity\Custom\\', '', $classNameWithNameSpace).ucfirst($propertyName).'[]') !== false)
                        $isCollection = true;

                    if ($isCollection){
                        $model->$propertyName = [];
                    }else{
                        $model->$propertyName = $this->paveDummyData(
                            $classNameWithNameSpace.ucfirst($propertyName),
                            get_class_vars($classNameWithNameSpace.ucfirst($propertyName)),
                            new $belongClassNameWithNameSpace(),
                            $isRootField
                        );
                    }

                }
            }
        }

        return $model;
    }


    /**
     * @param $model
     * @param $decodedResponse
     * @param string $classNameWithNameSpace
     */
    private function logChanges($model, $decodedResponse, string $classNameWithNameSpace)
    {

        if ($this->entityHasDifferentVersion($model, $decodedResponse) === true && (!empty($this->notExistedField) || !empty($this->rootNotReturnedFieldsFromDFS)) ){

            $changedVersion = $this->getDiffInSemanticVersion($model, $decodedResponse);

            if ($changedVersion < 2){

                $versionsNameMask = [2=>'path', 1=>'minor', 0=>'major'];

                $messageWithNotExistedField = '==================== File ==============================|     New Field     |=======|'.PHP_EOL;
                $messageWithNotReturningFields = 'ENTITY: List of fields not received from dfs:'.PHP_EOL.'==================== File ==============================|     New Field     |=======|'.PHP_EOL;

                // process notExistedField

                foreach ($this->notExistedField as $fileName => $value){

                    foreach ($value as $fielName => $fieldArr)
                        $messageWithNotExistedField .= $fieldArr['file']."  ->->-> NEW FIELD: ".$fieldArr['field']." FIELD TYPE: ".$fieldArr['type'].PHP_EOL.
                            '------------------------------------------------------------------------------------|'.PHP_EOL;
                }

                foreach ($this->rootNotReturnedFieldsFromDFS as $className => $fields){
                    foreach ($fields as $fieldName)
                        $messageWithNotReturningFields .= $className."  ->->-> NOT RECEIVED: ".$fieldName.PHP_EOL.
                            '------------------------------------------------------------------------------------|'.PHP_EOL;
                }


                switch ($versionsNameMask[$changedVersion]){
                    case 'minor':
                        $this->logger->pushMessage(
                            PHP_EOL."ENTITY: DFS-API realized new fields for your entity:".PHP_EOL.PHP_EOL.$messageWithNotExistedField.PHP_EOL.$messageWithNotReturningFields,
                            'Entity version is different than current DFSVersion. DFS released a new '.$versionsNameMask[$changedVersion].' version',
                            $classNameWithNameSpace,
                            'INFO',
                            $decodedResponse->version,
                            $model->version
                        );
                        break;
                    case 'major':
                        $this->logger->pushMessage(
                            "ENTITY: DFS-API changed structure. IT IS VERY CRITICAL UPDATE.".
                            PHP_EOL.'DFSCLIENT: AT NOW YOUR ENTITY WORKING NOT CORRECT'.
                            PHP_EOL.'DFSCLIENT: PLEASE UPDATE YOUR CLIENT VIA COMPOSER, OR YOU MUST REGENERATE ENTITY by ENTITY_CREATOR'.
                            PHP_EOL.PHP_EOL.$messageWithNotExistedField.PHP_EOL.$messageWithNotReturningFields,

                            'CRITICAL UPDATE, ENTITY VERSION IS DIFFERENT. DFS released a new '.$versionsNameMask[$changedVersion].' version',
                            $classNameWithNameSpace,
                            'ERROR',
                            $decodedResponse->version,
                            $model->version
                        );
                        break;
                    case 'path':
                        $this->logger->pushMessage(
                            "ENTITY: It is not critical, data has not be changed.",
                            'Entity version is different. DFS released a new '.$versionsNameMask[$changedVersion].' version',
                            $classNameWithNameSpace,
                            'INFO',
                            $decodedResponse->version,
                            $model->version
                        );
                        break;
                }

            }
        }
    }

    /**
     * @param $entity
     * @param $decodedJson
     * @return bool
     */
    private function entityHasDifferentVersion($entity, $decodedJson): bool
    {
        if (property_exists($entity, 'version') && isset($decodedJson->version)){

            if ($entity->version !== $decodedJson->version)
                return true;

            return false;
        }

        return false;
    }

    /**
     * Will return 0 - major version is changed, 1 - minor version is changed, 2 - path version is changed
     * false if version not changed;
     *
     * @param $entity
     * @param $decodedJson
     * @return bool|int
     */
    private function getDiffInSemanticVersion($entity, $decodedJson)
    {
        $changedVersionType = false;

        if (property_exists($entity, 'version') && isset($decodedJson->version)){

            if ($entity->version !== $decodedJson->version){
                $localVersion = explode('.', $entity->version);
                $dfsVersion = explode('.', $decodedJson->version);

                foreach (array_reverse($dfsVersion, true) as $segmentIndex => $versionSegment) {
                    if ((int)$versionSegment > (int)$localVersion[$segmentIndex])
                        $changedVersionType = $segmentIndex;
                }
            }
        }
        return $changedVersionType;
    }


    /**
     * @param string $json
     * @param string|null $classSuffix
     * @param bool|null $resultCanBeTransformedToArray
     * @param bool $mustbeAsCollection
     * @return array|mixed
     */
    public function paveAdvancedData(string $json, ?string $classSuffix, ?bool $resultCanBeTransformedToArray = true, bool $mustbeAsCollection = false)
    {
       // dump($classSuffix);

        $decodedResponse = json_decode($json);
        $nameSpace = 'DFSClientV3\Entity\Custom';
        $arrayWithResults = [];
        $model = null;

        // init model if json type is not collection
        if ($mustbeAsCollection === false){
            if (!$classSuffix){
                $classNameWithNameSpace = $nameSpace.'\\'.$this->className.'EntityMain';
                $model = new $classNameWithNameSpace($this->requestStatus, $this->pathToMainData);
                $classSuffix = 'EntityMain';
            }else{
                $classNameWithNameSpace = $nameSpace . '\\' . $this->className . $classSuffix;
                if (class_exists($classNameWithNameSpace))
                    $model = new $classNameWithNameSpace();
            }
        }


        foreach ($decodedResponse as $key => $value){


            // execute if json is collection type
            if ($mustbeAsCollection === true){

                if (substr($classSuffix, -5) === 'Items') {
                    $arrayWithResults[$key] = $this->paveAdvancedData(json_encode($value), $classSuffix.ucfirst($value->type), $resultCanBeTransformedToArray);
                }else{
                    $arrayWithResults[$key] = $this->paveAdvancedData(json_encode($value), $classSuffix, $resultCanBeTransformedToArray);
                }
            }

            // processing not collection type
            if ($mustbeAsCollection === false) {
                if (is_object($model) && property_exists($model, $key)){
                    // kostyl
                    if ($key == 'tasks' or $key == 'result' && $resultCanBeTransformedToArray)
                        $value = (array)$value;

                    if (is_object($value) || is_array($value) && $obj = ClassGenerator::arrayContainObject($value)) {

                        //   dump($classSuffix, $value);
                        if (is_object($value)) {
                            $model->$key = $this->paveAdvancedData(json_encode($value), $classSuffix.ucfirst($key), $resultCanBeTransformedToArray);
                        }
                        elseif ( is_array($value) && $obj = ClassGenerator::arrayContainObject($value)) {
                            if ($key === 'items'){
                                $model->$key = $this->paveAdvancedData(json_encode($value), $classSuffix.ucfirst($key), $resultCanBeTransformedToArray, true);
                            } else{
                                $model->$key = $this->paveAdvancedData(json_encode($value), $classSuffix.ucfirst($key), $resultCanBeTransformedToArray, true);
                            }
                        }
                    }else {
                        if ($key !== 'version')
                            $model->$key = $value;
                    }
                }else{
                    $this->notExistedField[$classNameWithNameSpace][$key]['file'] = $classNameWithNameSpace;
                    $this->notExistedField[$classNameWithNameSpace][$key]['field'] = $key;
                    $this->notExistedField[$classNameWithNameSpace][$key]['type'] = gettype($value);
                }


            }

        }


        if ($classSuffix === 'EntityMain' && $this->logger !== false){
            $this->logChanges($model, $decodedResponse, $classNameWithNameSpace);
        }

        if ($mustbeAsCollection) return $arrayWithResults;

        if (!$mustbeAsCollection) return $model;
    }

}
