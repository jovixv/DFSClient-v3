<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteSerpLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteSerpTask_get;

class UserEntityMainTasksResultMoneyLimitsMinuteSerp
{
    /**
     * @var null|integer;
     */
    public $languages = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyLimitsMinuteSerpLive;
     */
    public $live = null;

    /**
     * @var null|integer;
     */
    public $locations = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyLimitsMinuteSerpTask_get;
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
