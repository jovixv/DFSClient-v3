<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDaySerpLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDaySerpTask_get;

class UserEntityMainTasksResultMoneyStatisticsDaySerp
{
    /**
     * @var null|integer;
     */
    public $languages = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDaySerpLive;
     */
    public $live = null;

    /**
     * @var null|integer;
     */
    public $locations = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDaySerpTask_get;
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
