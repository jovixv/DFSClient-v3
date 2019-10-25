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
