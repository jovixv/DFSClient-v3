<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinuteSerpLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinuteSerpTask_get;

class UserEntityMainTasksResultMoneyStatisticsMinuteSerp
{
    /**
     * @var null|integer;
     */
    public $languages = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteSerpLive;
     */
    public $live = null;

    /**
     * @var null|integer;
     */
    public $locations = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteSerpTask_get;
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
