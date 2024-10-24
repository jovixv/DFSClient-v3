<?php

namespace DFSClientV3\Models\SerpApi;

use DFSClientV3\Entity\Custom\GetSerpHtmlResultsByTaskIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class GetSerpHtmlResultsByTaskId extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'serp/{$se}/{$seType}/task_get/html/{$taskUID}';

    protected $resultShouldBeTransformedToArray = true;

    public function setTaskId(string $taskUID)
    {
        $this->requestToFunction = str_replace('{$taskUID}', $taskUID, $this->requestToFunction);

        return $this;
    }

    /**
     * @param string $seType
     *
     * @throws \Exception
     *
     * @return $this
     */
    public function setSeType(string $seType)
    {
        if (!in_array($seType, $this->seTypes)) {
            throw new \Exception('Provided se type not allowed');
        }

        $this->requestToFunction = str_replace('{$seType}', $seType, $this->requestToFunction);

        return $this;
    }

    /**
     * @param string $seName
     *
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);

        return $this;
    }

    /**
     * @return GetSerpHtmlResultsByTaskIdEntityMain
     */
    #[\Override]
    public function get(): GetSerpHtmlResultsByTaskIdEntityMain
    {
        return parent::get();
    }
}
