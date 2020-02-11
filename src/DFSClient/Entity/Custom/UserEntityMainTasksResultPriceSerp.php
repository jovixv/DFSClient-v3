<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLanguages;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLocations;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpTask_get;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpTask_post;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpTasks_ready;

class UserEntityMainTasksResultPriceSerp 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLanguages $languages;
    */
    public $languages = null;

    /**
    * @var null|UserEntityMainTasksResultPriceSerpLive $live;
    */
    public $live = null;

    /**
    * @var null|UserEntityMainTasksResultPriceSerpLocations $locations;
    */
    public $locations = null;

    /**
    * @var null|UserEntityMainTasksResultPriceSerpTask_get $task_get;
    */
    public $task_get = null;

    /**
    * @var null|UserEntityMainTasksResultPriceSerpTask_post $task_post;
    */
    public $task_post = null;

    /**
    * @var null|UserEntityMainTasksResultPriceSerpTasks_ready $tasks_ready;
    */
    public $tasks_ready = null;
 
}