<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceCompetitorTask_postPriority_low;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceCompetitorTask_postPriority_normal;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceCompetitorTask_postPriority_high;

class UserEntityMainTasksResultPriceCompetitorTask_post 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceCompetitorTask_postPriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCompetitorTask_postPriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCompetitorTask_postPriority_high priority_high;
    */
    public $priority_high = null;        
     
}