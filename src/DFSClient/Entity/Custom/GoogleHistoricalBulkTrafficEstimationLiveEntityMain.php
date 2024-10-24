<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasks;
use DFSClientV3\Models\ResponseModel;

class GoogleHistoricalBulkTrafficEstimationLiveEntityMain extends ResponseModel
{
    /**
     * @var null|string;
     */
    public $version = '0.1.20230705';

    /**
     * @var null|integer;
     */
    public $status_code = null;

    /**
     * @var null|string;
     */
    public $status_message = null;

    /**
     * @var null|string;
     */
    public $time = null;

    /**
     * @var null|double;
     */
    public $cost = null;

    /**
     * @var null|integer;
     */
    public $tasks_count = null;

    /**
     * @var null|integer;
     */
    public $tasks_error = null;

    /**
     * @var array|GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasks[];
     */
    public $tasks = [];

    /**
     * @return GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResult|null
     */
    #[\Override]
    public function getResultsByPostID($postID): ?GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResult
    {
        return parent::getResultsByPostID($postID);
    }
}
