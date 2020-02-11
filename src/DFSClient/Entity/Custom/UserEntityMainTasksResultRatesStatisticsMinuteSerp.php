<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteSerpLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteSerpTask_get;

class UserEntityMainTasksResultRatesStatisticsMinuteSerp 
{    
    /**
    * @var null|integer $languages;
    */
    public $languages = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteSerpLive $live;
    */
    public $live = null;

    /**
    * @var null|integer $locations;
    */
    public $locations = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteSerpTask_get $task_get;
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