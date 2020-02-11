<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDaySerpLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDaySerpTask_get;

class UserEntityMainTasksResultMoneyStatisticsDaySerp 
{    
    /**
    * @var null|integer $languages;
    */
    public $languages = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsDaySerpLive $live;
    */
    public $live = null;

    /**
    * @var null|integer $locations;
    */
    public $locations = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsDaySerpTask_get $task_get;
    */
    public $task_get = null;

    /**
    * @var null|integer $task_post;
    */
    public $task_post = null;

    /**
    * @var null|integer $tasks_ready;
    */
    public $tasks_ready = null;
 
}