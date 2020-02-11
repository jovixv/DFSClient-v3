<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteSerpLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteSerpTask_get;

class UserEntityMainTasksResultRatesLimitsMinuteSerp 
{    
    /**
    * @var null|integer $languages;
    */
    public $languages = null;

    /**
    * @var null|UserEntityMainTasksResultRatesLimitsMinuteSerpLive $live;
    */
    public $live = null;

    /**
    * @var null|integer $locations;
    */
    public $locations = null;

    /**
    * @var null|UserEntityMainTasksResultRatesLimitsMinuteSerpTask_get $task_get;
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