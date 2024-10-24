<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceTraffic_analyticsLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceTraffic_analyticsTask_get;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceTraffic_analyticsTask_post;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceTraffic_analyticsTasks_ready;

class UserEntityMainTasksResultPriceTraffic_analytics
{
    /**
     * @var null|UserEntityMainTasksResultPriceTraffic_analyticsLive;
     */
    public $live = null;

    /**
     * @var null|UserEntityMainTasksResultPriceTraffic_analyticsTask_get;
     */
    public $task_get = null;

    /**
     * @var null|UserEntityMainTasksResultPriceTraffic_analyticsTask_post;
     */
    public $task_post = null;

    /**
     * @var null|UserEntityMainTasksResultPriceTraffic_analyticsTasks_ready;
     */
    public $tasks_ready = null;
}
