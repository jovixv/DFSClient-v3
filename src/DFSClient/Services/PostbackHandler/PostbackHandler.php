<?php


namespace DFSClientV3\Services\PostbackHandler;


use DFSClientV3\Models\AbstractModel;
use DFSClientV3\Models\DataMapper;
use DFSClientV3\Models\PaveDataOptions;

class PostbackHandler
{
    protected $model;
    protected $status;

    public function __construct(AbstractModel $model, $status = true)
    {
        $this->model = $model;
        $this->status = $status;
    }

    public function mapPostbackPayload ($postbackPayload)
    {
        $calledClass = $this->model->getCalledClass();
        $status = true;
        $pathToMainData = $this->model->getPathToMainData();

        $isJsonContainVariadicType = $this->model->isJsonContainVariadicType();
        $pathsToVariadicTypesAndValue  = $this->model->getPathsToVariadicTypesAndValue();
        $customFunctionForPaths = $this->model->getCustomFunctionForPaths();

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
