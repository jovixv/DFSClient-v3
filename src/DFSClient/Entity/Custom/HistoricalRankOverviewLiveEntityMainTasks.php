<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HistoricalRankOverviewLiveEntityMainTasksData;
use DFSClientV3\Entity\Custom\HistoricalRankOverviewLiveEntityMainTasksResult;

class HistoricalRankOverviewLiveEntityMainTasks
{
    /**
     * @var null|string;
     */
    public $id = null;

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
    public $result_count = null;

    /**
     * @var null|array;
     */
    public $path = null;

    /**
     * @var null|HistoricalRankOverviewLiveEntityMainTasksData;
     */
    public $data = null;

    /**
     * @var array|HistoricalRankOverviewLiveEntityMainTasksResult[];
     */
    public $result = [];
}
