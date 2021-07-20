<?php

namespace DFSClientV3\Services\EntityCreator;

use DFSClientV3\Models\AbstractModel;

class EntityCreator
{

    /**
     * @var string $path
     */
    private $path;

    /**
     * @var ClassGenerator
     */
    private $classGenerator;

    /**
     * EntityCreator constructor.
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->path = $path;
        $this->classGenerator = new ClassGenerator();
    }

    /**
     * @param string $json
     * @param string $className
     */
    public function createEntityByJsonNew(ClassCreatorOptions $options)
    {
        $options->setFilePath($this->path);
        $this->classGenerator->newRecursiveCreator($options);
    }

    /**
     * @param object $model
     * @return void
     */
    public function generateByModelNew(object $model): void
    {
        if ($model instanceof AbstractModel){
            $pathToMainEntityData = $model->getPathToMainData();
            $modelName = $model->getCalledClass();
            $json = $model->getAsJson();

            $classCreatorOptions = new ClassCreatorOptions();
            $classCreatorOptions->setClassName($modelName);
            $classCreatorOptions->setFilePath($this->path);
            $classCreatorOptions->setJson($json);
            $classCreatorOptions->setPathsToDictionary($model->getPathsToDictionary());
            $classCreatorOptions->setIsFileRequired(true);
            $classCreatorOptions->setPathsToVariadicTypesAndValue($model->getPathsToVariadicTypesAndValue());
            $classCreatorOptions->setJsonContainVariadicType($model->isJsonContainVariadicType());
            $classCreatorOptions->setCustomFunctionForPaths($model->getCustomFunctionForPaths());

            $this->classGenerator->newRecursiveCreator($classCreatorOptions);
        }
    }

    /**
     * @param $json
     */
    public function createEntityByJson(string $json, string $className, ?bool $resultCanBeTransformedToArray)
    {
        $file =  $this->classGenerator->createClass($className, $this->path);
        $this->classGenerator->recursiveCreator($json, $this->path, $className, 'Main', $resultCanBeTransformedToArray);
    }


    public function generateByModel(object $model)
    {

        if ($model instanceof AbstractModel)
        {
           $pathToMainEntityData = $model->getPathToMainData();
           $modelName = $model->getCalledClass();
           $json = $model->getAsJson();
           $this->classGenerator->recursiveCreator($json, $this->path, $modelName, 'Main', $model->resultShouldBeTransformedToArray());
        }
    }

}
