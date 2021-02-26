<?php

namespace DFSClientV3\Models\TrafficAnalyticsApi\Similarweb;

use DFSClientV3\Models\AbstractModel;

class TrafficAnalyticsGetResultsById extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'traffic_analytics/similarweb/task_get/{$taskUUID}';
    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    public function setTaskId(string $taskUUID)
    {
        $this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMain
    {
        return parent::get();
    }

}
