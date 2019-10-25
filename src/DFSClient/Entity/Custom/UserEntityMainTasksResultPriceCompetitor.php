<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCompetitorLive;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCompetitorTask_get;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCompetitorTask_post;

class UserEntityMainTasksResultPriceCompetitor 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceCompetitorLive live;
    */
    public $live = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCompetitorTask_get task_get;
    */
    public $task_get = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCompetitorTask_post task_post;
    */
    public $task_post = null;        
     
}
