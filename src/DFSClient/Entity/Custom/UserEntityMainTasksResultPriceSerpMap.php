<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpMapPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpMapPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpMapPriority_high;

class UserEntityMainTasksResultPriceSerpMap 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpMapPriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpMapPriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpMapPriority_high priority_high;
    */
    public $priority_high = null;        
     
}