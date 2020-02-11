<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinuteSerpLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinuteSerpTask_get;

class UserEntityMainTasksResultMoneyStatisticsMinuteSerp 
{    
    /**
    * @var null|integer $languages;
    */
    public $languages = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteSerpLive $live;
    */
    public $live = null;

    /**
    * @var null|integer $locations;
    */
    public $locations = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteSerpTask_get $task_get;
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