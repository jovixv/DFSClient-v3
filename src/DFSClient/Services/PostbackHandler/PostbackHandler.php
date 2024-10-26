<?php

namespace DFSClientV3\Services\PostbackHandler;

use DFSClientV3\Models\AbstractModel;
use DFSClientV3\Models\DataMapper;
use DFSClientV3\Models\PaveDataOptions;

class PostbackHandler
{
    protected $model;

    public function __construct(AbstractModel $model, protected $status = true)
    {
        $this->model = $model;
    }

    public function mapPostbackPayload($postbackPayload)
    {
        $calledClass    = $this->model->getCalledClass();
        $status         = true;
        $pathToMainData = $this->model->getPathToMainData();

        $isJsonContainVariadicType    = $this->model->isJsonContainVariadicType();
        $pathsToVariadicTypesAndValue = $this->model->getPathsToVariadicTypesAndValue();
        $customFunctionForPaths       = $this->model->getCustomFunctionForPaths();

        $mapper = new DataMapper($calledClass, $this->status, $pathToMainData);

        $paveDataOptions = new PaveDataOptions();
        $paveDataOptions->setJson($postbackPayload);
        $paveDataOptions->setJsonContainVariadicType($isJsonContainVariadicType);
        $paveDataOptions->setPathsToVariadicTypesAndValue($pathsToVariadicTypesAndValue);
        $paveDataOptions->setCustomFunctionForPaths($customFunctionForPaths);

        $mappedModel = $mapper->paveDataNew($paveDataOptions);

        return $mappedModel;
    }
}
