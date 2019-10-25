<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_finderLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_finderTask_get;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_finderTask_post;

class UserEntityMainTasksResultPriceKeywords_finder 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_finderLive live;
    */
    public $live = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_finderTask_get task_get;
    */
    public $task_get = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_finderTask_post task_post;
    */
    public $task_post = null;        
     
}
