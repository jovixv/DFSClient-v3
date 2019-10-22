<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpLocationsPriority_low;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpLocationsPriority_normal;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpLocationsPriority_high;

class UserEntityMainTasksResultPriceSerpLocations 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLocationsPriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLocationsPriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLocationsPriority_high priority_high;
    */
    public $priority_high = null;        
     
}