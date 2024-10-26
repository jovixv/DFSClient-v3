<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDaySerpLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDaySerpTask_get;

class UserEntityMainTasksResultRatesStatisticsDaySerp
{
    /**
     * @var null|integer;
     */
    public $languages = null;

    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsDaySerpLive;
     */
    public $live = null;

    /**
     * @var null|integer;
     */
    public $locations = null;

    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsDaySerpTask_get;
     */
    public $task_get = null;

    /**
     * @var null|integer;
     */
    public $task_post = null;

    /**
     * @var null|integer;
     */
    public $tasks_ready = null;
}
