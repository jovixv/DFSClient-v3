<?php

namespace DFSClientV3\Models\TrafficAnalyticsApi\Similarweb;

use DFSClientV3\Entity\Custom\TrafficAnalyticsGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class TrafficAnalyticsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'traffic_analytics/similarweb/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return TrafficAnalyticsGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): TrafficAnalyticsGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
