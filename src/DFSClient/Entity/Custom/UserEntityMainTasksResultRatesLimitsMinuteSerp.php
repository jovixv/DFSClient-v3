<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteSerpLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteSerpTask_get;

class UserEntityMainTasksResultRatesLimitsMinuteSerp
{
    /**
     * @var null|integer;
     */
    public $languages = null;

    /**
     * @var null|UserEntityMainTasksResultRatesLimitsMinuteSerpLive;
     */
    public $live = null;

    /**
     * @var null|integer;
     */
    public $locations = null;

    /**
     * @var null|UserEntityMainTasksResultRatesLimitsMinuteSerpTask_get;
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
