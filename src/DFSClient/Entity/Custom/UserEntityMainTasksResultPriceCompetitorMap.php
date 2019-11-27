<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCompetitorMapPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCompetitorMapPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCompetitorMapPriority_high;

class UserEntityMainTasksResultPriceCompetitorMap 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceCompetitorMapPriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCompetitorMapPriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCompetitorMapPriority_high priority_high;
    */
    public $priority_high = null;        
     
}