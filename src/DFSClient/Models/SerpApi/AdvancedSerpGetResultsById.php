<?php

namespace DFSClientV3\Models\SerpApi;

use DFSClientV3\Models\AbstractModel;

class AdvancedSerpGetResultsById extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'serp/{$se}/{$seType}/task_get/advanced/{$taskUUID}';
    protected $resultShouldBeTransformedToArray = true;

    protected $jsonContainVariadicType = true;

    protected $pathsToVariadicTypesAndValue = [
        'tasks->(:number)->result->(:number)->items->(:number)' => 'type'
    ];

    protected $useNewMapper = true;

    public function setTaskId(string $taskUUID)
    {
        $this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);
        return $this;
    }
    /**
     * The 'events' se type ('serp/{$se}/events/...' endpoints) is deprecated and will be removed in a future release.
     *
     * @param string $seType
     * @return $this
     * @throws \Exception
     */
    public function setSeType(string $seType)
    {
        if (!in_array($seType,$this->seTypes))
            throw new \Exception('Provided se type not allowed');

        if ($seType === 'events')
            trigger_error("The 'serp/google/events' endpoints are deprecated and will be removed in a future release. Do not use the 'events' se type.", E_USER_DEPRECATED);

        $this->requestToFunction = str_replace('{$seType}', $seType, $this->requestToFunction);

        return $this;
    }

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMain
    {
        return parent::get();
    }

}
