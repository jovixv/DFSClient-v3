<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceCompetitorLive;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceCompetitorTask_get;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceCompetitorTask_post;

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