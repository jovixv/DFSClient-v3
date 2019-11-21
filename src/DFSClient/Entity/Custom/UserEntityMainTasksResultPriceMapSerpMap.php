<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceMapSerpMapPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceMapSerpMapPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceMapSerpMapPriority_high;

class UserEntityMainTasksResultPriceMapSerpMap 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceMapSerpMapPriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceMapSerpMapPriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceMapSerpMapPriority_high priority_high;
    */
    public $priority_high = null;        
     
}