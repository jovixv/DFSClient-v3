<?php

namespace DFSClient\Models;
use DFSClient\Bootstrap\Application;
use DFSClient\Services\EntityCreator\ClassGenerator;

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

        if ($this->className === 'GetAdvancedSerpResultsById')
            return $this->paveAdvancedData($json, $classSuffix, $resultCanBeTransformedToArray, $mustbeAsCollection);

        //$config = $this->applications->getConfig();
        $decodedResponse = json_decode($json);
        $nameSpace = 'DFSClient\Entity\Custom';


        if ($classSuffix !== null){
            $classNameWithNameSpace = $nameSpace.'\\'.$this->className.$classSuffix;
            $model = new $classNameWithNameSpace();

        }

        if ($classSuffix === null){
            $classNameWithNameSpace = $nameSpace.'\\'.$this->className.'EntityMain';
            $model = new $classNameWithNameSpace($this->requestStatus, $this->pathToMainData);
            $classSuffix = 'EntityMain';
        }


        $arrayWithResults = [];

        foreach ($decodedResponse as $key => $value)
        {

            if ($mustbeAsCollection){
                $arrayWithResults[$key] = $this->paveData(json_encode($value), $classSuffix, $resultCanBeTransformedToArray);
            } elseif (class_exists($classNameWithNameSpace) && property_exists($model, ClassGenerator::validateClassField($key))){
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
                    $model->$key = $value;
                }
            }
        }

        if ($mustbeAsCollection) return $arrayWithResults;

        if (!$mustbeAsCollection) return $model;
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
        $decodedResponse = json_decode($json);
        $nameSpace = 'DFSClient\Entity\Custom';

        if (!$classSuffix){
            $classNameWithNameSpace = $nameSpace.'\\'.$this->className.'EntityMain';
            $model = new $classNameWithNameSpace($this->requestStatus, $this->pathToMainData);
        }

        if ($classSuffix && $classSuffix !== 'EntityItems'){
                $classNameWithNameSpace = $nameSpace.'\\'.$this->className.$classSuffix;
                $model = new $classNameWithNameSpace();
        }elseif($classSuffix && $classSuffix === 'EntityItems' && is_object($decodedResponse) && isset($decodedResponse->type)){
            $classNameWithNameSpace = $nameSpace.'\\'.$this->className.'EntityItems'.ucfirst($decodedResponse->type);
            $model = new $classNameWithNameSpace();
        }

        $arrayWithResults = [];

        foreach ($decodedResponse as $key => $value)
        {
            if ($mustbeAsCollection){
                $arrayWithResults[$key] = $this->paveAdvancedData(json_encode($value), $classSuffix,$resultCanBeTransformedToArray);
            } elseif (property_exists($model, $key)){
                // kostyl
                if ($key == 'tasks' or $key == 'result' && $resultCanBeTransformedToArray)
                    $value = (array)$value;


                if (is_object($value) || is_array($value) && $obj = ClassGenerator::arrayContainObject($value)) {
                    if (is_object($value)) {

                        if ($classSuffix === 'EntityItems' && isset($value->type)){
                            $model->$key = $this->paveAdvancedData(json_encode($value), 'EntityItems'.ucfirst($value->type), $resultCanBeTransformedToArray);
                        }else{
                            $model->$key = $this->paveAdvancedData(json_encode($value), 'Entity'.ucfirst($key), $resultCanBeTransformedToArray);
                        }
                    }
                    elseif ( is_array($value) && $obj = ClassGenerator::arrayContainObject($value)) {

                        $model->$key = $this->paveAdvancedData(json_encode($value), 'Entity'.ucfirst($key), $resultCanBeTransformedToArray, true);
                    }
                }else {
                    $model->$key = $value;
                }
            }
        }

        if ($mustbeAsCollection) return $arrayWithResults;

        if (!$mustbeAsCollection) return $model;
    }

}
