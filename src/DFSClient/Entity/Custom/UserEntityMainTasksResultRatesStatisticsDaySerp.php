<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDaySerpLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDaySerpTask_get;

class UserEntityMainTasksResultRatesStatisticsDaySerp 
{    
    /**
    * @var null|integer $languages;
    */
    public $languages = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDaySerpLive $live;
    */
    public $live = null;

    /**
    * @var null|integer $locations;
    */
    public $locations = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDaySerpTask_get $task_get;
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