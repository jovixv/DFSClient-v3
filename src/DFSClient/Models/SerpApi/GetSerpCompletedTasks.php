<?php

namespace DFSClientV3\Models\SerpApi;

use DFSClientV3\Models\AbstractModel;
use function GuzzleHttp\Psr7\str;

class GetSerpCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'serp/{$se}/{$seType}/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

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

        $this->seType = $seType;

        $this->requestToFunction = str_replace('{$seType}', $seType, $this->requestToFunction);

        return $this;
    }

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->se = $seName;
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\GetSerpCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GetSerpCompletedTasksEntityMain
    {
        return parent::get();
    }
}
