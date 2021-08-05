<?php

namespace DFSClientV3\Services\EntityCreator;

use DFSClientV3\Entity\Custom\DictionaryEntity;

class ClassGenerator
{


    /**
     * Available types for advanced serp
     *
     * @var array
     */
    private $availableTypes = ["top_stories","organic","people_also_ask","video","images","local_pack","people_also_search","twitter","knowledge_graph","related_searches","google_reviews","carousel","paid","shopping","featured_snippet", "jobs", "map"];

    private $currentIterationPath = '';
    /**
     * ClassGenerator constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param string $classNameWithOutExtension
     * @param string $path
     * @return resource
     */
    public function createClass(string $classNameWithOutExtension, string $path = __DIR__)
    {
       return $file = fopen($path.'/'.$classNameWithOutExtension.'.php', 'w+' );
    }

    /**
     * @param string $path
     */
    public function createFolder(string $path = __DIR__)
    {
        mkdir($path,'777', true);
    }


    /**
     * @param array $items
     * @param string $fieldName
     * @return array Associative array with key as type
     */
    private function findUniqVariadicTypes(array $items, string $fieldName):array
    {
        $result = [];

        foreach ($items as $item) {
            if (isset($item->$fieldName))
                $result[$item->$fieldName] = true;
        }

        return $result;
    }

    /**
     * @param array $types
     * @param string $className
     * @param string $suffix
     * @return bool|string
     */
    private function generateVariadicTypesForDocBlock(array $types, string $className, string $suffix)
    {
        $types = array_flip(ClassGenerator::validateClassField(array_keys($types)));

        $string = '';

        foreach ($types as $type => $availability)
            $string .= $className.'Entity'.$suffix.ucfirst($type).'[]|';

        return substr($string, 0, -1);
    }

    /**
     * @param string $className
     * @param string $suffix
     * @param bool $isCollection
     * @return string
     */
    private function generateTypeForDocBlock(string $className, string $suffix, bool $isCollection = false)
    {
        if ($isCollection)
            return $className.'Entity'.$suffix;

        return $className.'Entity'.$suffix.'[]';
    }

    /**
     * @param string $className
     * @param string $suffix
     * @param array|null $types
     * @return array
     */
    private function generateNameSpaces(string $className, string $suffix, ?array $types = null)
    {
        if ($types){
            $nameSpaces = [];
            $types = array_flip(ClassGenerator::validateClassField(array_keys($types)));

            foreach ($types as $type => $availability){
                $nameSpaces[] = 'use DFSClientV3\Entity\Custom\\'.$className.'Entity'.$suffix.ucfirst($type).';';
            }

            return $nameSpaces;
        }

        return ['use DFSClientV3\Entity\Custom\\'.$className.'Entity'.$suffix.';'];
    }


    /**
     * @param ClassCreatorOptions $classCreatorOptions
     */
    public function newRecursiveCreator(ClassCreatorOptions $classCreatorOptions)
    {
        $content                    = json_decode($classCreatorOptions->getJson());
        $fileName                   = $classCreatorOptions->getClassName().'Entity'.$classCreatorOptions->getSuffix();
        $variadicTypes              = $classCreatorOptions->getPathsToVariadicTypesAndValue();
        $classProperty              = [];
        $classNameSpaces            = [];
        $dictionaries               = $classCreatorOptions->getPathsToDictionary();
        // previous iteration path, this variable contain path from previous recursive execution
        $this->currentIterationPath = $this->prepareStructurePath($classCreatorOptions->prevPath);


        if ($classCreatorOptions->isFileRequired())
            $file = $this->createClass($fileName, $classCreatorOptions->getFilePath());

        if ($this->isIterable($content)){
            foreach ($content as $key => $value){
                // current iteration path
                $this->currentIterationPath = $this->prepareStructurePath($classCreatorOptions->prevPath.$key);

                if ($customFunction = $classCreatorOptions->getCustomFunctionForPath($this->currentIterationPath))
                    $value = call_user_func($customFunction, $key, $value);

                if (!$this->isValueFinalized($value)){

                    $options = clone $classCreatorOptions;
                    $options->setJson(json_encode($value));

                    if(isset($dictionaries[$this->currentIterationPath])){
                        /**
                         * @var DictionaryEntity $dictionaryName
                         */
                        $dictionaryName = $dictionaries[$this->currentIterationPath];
                        $value = new $dictionaryName((array)$value);
                        $options->setJson(json_encode($value->getAny()));
                    }

                    $options->prevPath = $classCreatorOptions->prevPath.$key.'->';
                        // json has variadic types, it means some value, has array with different objects
                        // check if the current iteration path equal some variadic type
                        if ($classCreatorOptions->isJsonContainVariadicType() && isset($variadicTypes[$this->currentIterationPath])) {
                            $fieldNameWithType = $variadicTypes[$this->currentIterationPath];
                            $options->setSuffix($classCreatorOptions->getSuffix() . ucfirst($value->$fieldNameWithType));
                            $options->setIsFileRequired(true);
                        }
                        // variable contain object
                        elseif (!is_int($key) && is_object($value)){
                            $options->setIsFileRequired(true);
                            $options->setSuffix($classCreatorOptions->getSuffix().ucfirst($key));
                            $classProperty[$key] = $this->generateTypeForDocBlock(
                                $options->getClassName(),
                                $options->getSuffix(),
                                true
                            );
                            $classNameSpaces = $this->generateNameSpaces($options->getClassName(), $options->getSuffix());
                        }
                        elseif (is_int($key) && $value instanceof DictionaryEntity){
                            $dictionaryNameSpaceArray = explode('\\', get_class($value));
                            $dictionaryName = $dictionaryNameSpaceArray[count($dictionaryNameSpaceArray) - 1];

                            $options->setIsFileRequired(false);
                            $options->setSuffix($classCreatorOptions->getSuffix().$dictionaryName.'Item');
                        }
                        // for iteration array with objects
                        elseif(is_int($key) && is_object($value)){
                            $options->setIsFileRequired(true);
                            $options->setSuffix($classCreatorOptions->getSuffix());
                        }
                        // variable contain array with object
                        elseif (!is_int($key) && is_array($value)) {

                            $emulateNextPathLevel = $this->currentIterationPath.'->(:number)';
                            $options->setIsFileRequired(false);
                            $options->setSuffix($classCreatorOptions->getSuffix().ucfirst($key));

                            // value has variadic types
                            if (isset($variadicTypes[$emulateNextPathLevel])) {
                                $filedName = $variadicTypes[$emulateNextPathLevel];
                                $types = $this->findUniqVariadicTypes($value, $filedName);

                                $classProperty[$key] = $this->generateVariadicTypesForDocBlock(
                                    $types,
                                    $options->getClassName(),
                                    $options->getSuffix()
                                );

                                $classNameSpaces = $this->generateNameSpaces($options->getClassName(), $options->getSuffix(), $types);
                            }

                            // value does not have variadic types
                            if (!isset($variadicTypes[$emulateNextPathLevel])){

                                if (isset($dictionaries[$emulateNextPathLevel])){
                                    $classProperty[$key] = '\\'.$dictionaries[$emulateNextPathLevel].'[]';
                                    $classNameSpaces[] = 'use '.$dictionaries[$emulateNextPathLevel]. ';';
                                }else{
                                    $classProperty[$key] = $this->generateTypeForDocBlock(
                                        $options->getClassName(),
                                        $options->getSuffix()
                                    );
                                    $classNameSpaces = $this->generateNameSpaces($options->getClassName(), $options->getSuffix());
                                }

                            }

                        }
                    // handle next nesting payload. recursion
                    $this->newRecursiveCreator($options);
                }

                if ($this->isValueFinalized($value)){
                    $classProperty[$key] = gettype($value);
                }
            }

            if ($classCreatorOptions->isFileRequired())
                $this->createClassContent(
                    $file,
                    $classCreatorOptions->getJson(),
                    $classCreatorOptions->getSuffix(),
                    $fileName,
                    $classNameSpaces,
                    $classProperty
                );

        }

    }



    /**
     * @param string $json - json schema for transform to Class Entity
     * @param string $path - path where Entity will be wrote.
     * @param string $className - Main prefix for class.
     * @param string $sufix - suffix for class,
     * @param bool $resultCanBeTransformedToArray - this variable only for DFS response, see to 55 row
     * @param bool $fileIsNotRequired
     */
    public function recursiveCreator(string $json, string $path, string $className = 'TestModel', string $sufix = 'Main', ?bool $resultCanBeTransformedToArray = true, bool $fileIsNotRequired = false)
    {
        $decodedJson = json_decode($json);
        $arrayWithClassProperty = [];
        $arrayWithNameSpacesForEntities = [];
        $fileShouldBeCreatedAdvancedKostyl = true;

        dump($sufix);
        if ($sufix)
            $nameForMainFile = $className.'Entity'.$sufix;

        if (is_array($decodedJson) or is_object($decodedJson)){

            if (!$fileIsNotRequired){
                $file = $this->createClass($nameForMainFile, $path); //create file
            }

            $res = null;
            foreach ($decodedJson as $key=>$value) {

                if ($key === 'tasks' or $key === 'result' && $resultCanBeTransformedToArray){
                    $value = (array)$value;
                }

                // kostyl
                if ($key === 'estimated' && $sufix === 'MainTasksResultTraffic')
                    $value = (array)$value;

                if ($key === 'keywords_positions' && $sufix === 'MainTasksResultItems')
                    $value = (array)$value;

                if (is_object($value) || is_array($value) && $obj = ClassGenerator::arrayContainObject($value)){

                    if (($className === 'GetAdvancedSerpResultsById' || $className === 'SettingSerpLiveAdvanced') && $sufix === 'MainTasksResult' && $key === 'items'){
                        $arrayWithNameSpacesForEntities = ClassGenerator::generateNameSpaceForAdvancedResult($this->availableTypes, $className);
                    }else{

                        if (($className !== 'GetAdvancedSerpResultsById' || $className === 'SettingSerpLiveAdvanced') && $key !== 'items')
                         $arrayWithNameSpacesForEntities[] = 'use DFSClientV3\Entity\Custom\\'.$className.'Entity'.$sufix.ucfirst($key).';';

                        if (($className === 'GetAdvancedSerpResultsById' || $className === 'SettingSerpLiveAdvanced') && $key !== 'items')
                            $arrayWithNameSpacesForEntities[] = 'use DFSClientV3\Entity\Custom\\'.$className.'Entity'.$sufix.ucfirst($key).';';
                    }


                    if (is_object($value))
                        $res = $value;

                    // if array contain object, we must write generic type
                    if (is_array($value) && $obj = ClassGenerator::arrayContainObject($value)){

                        if (($className === 'GetAdvancedSerpResultsById' || $className === 'SettingSerpLiveAdvanced') && $sufix === 'MainTasksResult' && $key === 'items')
                        {
                            $arrayWithClassProperty[$key] = ClassGenerator::generateTypesForAdvanced($this->availableTypes, $className);

                        }else if (($className === 'GetAdvancedSerpResultsById' || $className === 'SettingSerpLiveAdvanced') && $sufix !== 'MainTasksResultItems' && $key === 'items') {

                            $arrayWithClassProperty[$key] = $className.'Entity'.$sufix.'Items'.ucfirst($value[0]->type).'[]';
                            $arrayWithNameSpacesForEntities[] = 'use DFSClientV3\Entity\Custom\\'.$className.'Entity'.$sufix.'Items'.ucfirst($value[0]->type).';';
                        }
                        else{
                            $arrayWithClassProperty[$key] = $className.'Entity'.$sufix.ucfirst($key).'[]';
                        }

                        ##########################################
                        if (($className === 'GetAdvancedSerpResultsById' || $className === 'SettingSerpLiveAdvanced') && $key === 'items') {
                            $res = $value;
                            $fileShouldBeCreatedAdvancedKostyl = false;

                        }else{
                            $res = $obj;
                        }

                    }else{
                            $arrayWithClassProperty[$key] = $className.'Entity'.$sufix.ucfirst($key);
                    }

                    // first items in json.
//
//
//                    if ($className === 'GetAdvancedSerpResultsById' && $sufix === 'MainTasksResult') {
//                        $this->recursiveCreator(json_encode($res), $path, $className, "MainTasksResultItems",$resultCanBeTransformedToArray, true);
//                    }
                    if (($className == 'GetAdvancedSerpResultsById' || $className === 'SettingSerpLiveAdvanced') && (is_object($value) && property_exists($value, 'type'))) {
                        $this->recursiveCreator(json_encode($res), $path, $className, $sufix.ucfirst($value->type),$resultCanBeTransformedToArray);
                    }else{
                        $this->recursiveCreator(json_encode($res), $path, $className, $sufix.ucfirst($key),$resultCanBeTransformedToArray, ($fileShouldBeCreatedAdvancedKostyl === false) ? true : $fileIsNotRequired);
                    }


                }else{
                    if ($key === 'version'){
                        $arrayWithClassProperty[$key] = $value;
                    }else{
                        $arrayWithClassProperty[$key] = gettype($value);
                    }
                }
            }

            if (!$fileIsNotRequired)
                $this->createClassContent($file, json_encode($res), $sufix, $nameForMainFile, $arrayWithNameSpacesForEntities, $arrayWithClassProperty, $resultCanBeTransformedToArray);

        }
    }

    /**
     * @param $file resource
     * @param string $json
     * @param string $fileName
     * @param bool $isRecursion
     */
    public function createClassContent($file, string $json, string $suffix, string $fileName, array $arrayWithNameSpace, array $arrayWithProporties, ?bool $resultIsArray = true,  bool $isRecursion = false)
    {

        $array = json_decode($json);
        $string = '';
        $stringNameSpaces = '';

        $templateOfProperty = file_get_contents(realpath(__DIR__.'../../../Stubs/templateOfProperty.stub'));

        foreach ($arrayWithProporties as $key => $res)
        {

            if ($key === 'version'){
                $string .= str_replace(['$type','$varName', '$definedValue'], [gettype($res), $key, "'$res'"], $templateOfProperty);
            }else{

                if (strpos($res, '[]') === false){ // check if type is not collection
                    $string .= str_replace(['$type','$varName', '$definedValue'], [$res, $key, 'null'], $templateOfProperty);
                }else{
                    $string .= str_replace(['@var null', '$type','$varName', '$definedValue'], ['@var array', $res, $key, '[]'], $templateOfProperty);
                }
            }

        }

        foreach ($arrayWithNameSpace as $key => $res)
        {
            $stringNameSpaces .= $res.PHP_EOL;
        }

        // if main model we do extends
        if ($suffix === 'Main')
        {
            $functionString = $this->generateMainFunctionsString($fileName.'Tasks', $resultIsArray);

            $resultForInsert = sprintf("<?php".
                PHP_EOL.
                PHP_EOL."namespace DFSClientV3\Entity\Custom;".
                PHP_EOL.
                PHP_EOL.'%s'.
                PHP_EOL."class %s extends \DFSClientV3\Models\ResponseModel ".
                PHP_EOL."{"."    %s ".
                PHP_EOL."%s".
                PHP_EOL."}", $stringNameSpaces, $fileName, $string, $functionString);
        }else{
            $resultForInsert = sprintf("<?php".
                PHP_EOL.
                PHP_EOL."namespace DFSClientV3\Entity\Custom;".
                PHP_EOL.
                PHP_EOL.'%s'.
                PHP_EOL."class %s ".
                PHP_EOL."{"."    %s ".
                PHP_EOL."}", $stringNameSpaces, $fileName, $string);
        }

        $write = fwrite($file, $resultForInsert);
    }

    /**
     *
     */
    public function generatePropertyString()
    {

    }

    public static function arrayContainObject(array $array): ?object
    {
        if (!empty($array))
        {
            $arrayFirst = current($array);

            if (is_object($arrayFirst)){
                return $arrayFirst;
            }
        }

        return null;
    }

    /**
     * @param array $array
     * @param string $className
     * @return string
     */
    public static function generateTypesForAdvanced(array $types, string $className): string
    {
        $resultString = '';
        $types = ClassGenerator::validateClassField($types);

        foreach ($types as $type)
        {
            $resultString .= $className.'EntityMainTasksResultItems'.ucfirst($type).'[]|';
        }


        return substr($resultString, 0, -1);
    }

    /**
     * @param array $types
     * @param string $className
     * @return array
     */
    public static function generateNameSpaceForAdvancedResult(array $types, string $className): array
    {
        $tempArray = [];
        $types = ClassGenerator::validateClassField($types);
        foreach ($types as $type){
            $tempArray[]= 'use DFSClientV3\Entity\Custom\\'.$className.'EntityMainTasksResultItems'.ucfirst($type).';';
        }

        return $tempArray;
    }

    /**
     * @param array $filePrefix
     * @return string
     */
    private function generateMainFunctionsString(string $filePrefix, ?bool $resultIsArray): string
    {

        $functionString = '';

        if ($resultIsArray !== null){
            $functionString = PHP_EOL."\t/**
\t* @return ".($resultIsArray ? '\DFSClientV3\Entity\Custom\\'.$filePrefix.'Result[]|null' : '\DFSClientV3\Entity\Custom\\'.$filePrefix.'Result|null')."
\t*/
\tpublic function getResultsByPostID(\$postID): ".($resultIsArray ? '?array' : '?\DFSClientV3\Entity\Custom\\'.$filePrefix.'Result')." {
\t\treturn parent::getResultsByPostID(\$postID);
\t}";
        }
        return $functionString;
    }

    private function generateResultFunctionString(string $filePrefix, bool $resultIsArray): string
    {
        $functionString = PHP_EOL."\tpublic function getResultByIndex(\$postID): \DFSClientV3\Entity\Custom\\".$filePrefix."Result".($resultIsArray ? '[]' : '') ." {
\t\treturn parent::getResultsByPostID(\$postID);
\t}";
        return $functionString;
    }

    /**
     * @param array|string $fields
     *
     * @return array|string|null
     */
    public static function validateClassField($fields)
    {
        $forbiddenSymbols = ['/', '-'];
        $replaceOnSymbols = ['_', '_'];

        if (is_array($fields)){
            $replacedArray = [];

            foreach ($fields as $field){
                $replacedArray[] = str_replace($forbiddenSymbols, $replaceOnSymbols, $field);
            }

            return $replacedArray;
        }

        if (is_string($fields))
            return str_replace($forbiddenSymbols, $replaceOnSymbols, $fields);


        return null;
    }

    /**
     *
     * Function return true if value is object or array
     *
     * @param  mixed $value
     */
    private function isIterable($value): bool
    {
        return is_object($value) || is_array($value);
    }

    /**
     * @param $value
     * @return bool
     */
    private function isValueFinalized($value): bool
    {
        if (!$this->isIterable($value))
            return true;

        if (is_array($value) && !ClassGenerator::arrayContainObject($value))
            return true;

        return false;

    }

    /**
     * @param string $value
     * @return string
     */
    private function prepareStructurePath(string $value): string
    {
        $explodedPath = explode('->', $value);

        $result = array_map(function($value){
            if (is_numeric($value)){
                return '(:number)';
            }else{
                return $value;
            }
        }, $explodedPath);

        // delete last element if it is empty. It can ba empty if last element was ->
        $result = array_filter($result, function ($value){
           return !empty($value) ? true : false;
        });

        return implode('->', $result);
    }
}
