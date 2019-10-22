<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpLanguages;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpLive;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpLocations;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpTask_get;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpTask_post;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpTasks_ready;

class UserEntityMainTasksResultPriceSerp 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLanguages languages;
    */
    public $languages = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLive live;
    */
    public $live = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLocations locations;
    */
    public $locations = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpTask_get task_get;
    */
    public $task_get = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpTask_post task_post;
    */
    public $task_post = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpTasks_ready tasks_ready;
    */
    public $tasks_ready = null;        
     
}