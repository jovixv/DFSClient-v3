<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceMapCompetitorMapPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceMapCompetitorMapPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceMapCompetitorMapPriority_high;

class UserEntityMainTasksResultPriceMapCompetitorMap 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceMapCompetitorMapPriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceMapCompetitorMapPriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceMapCompetitorMapPriority_high priority_high;
    */
    public $priority_high = null;        
     
}