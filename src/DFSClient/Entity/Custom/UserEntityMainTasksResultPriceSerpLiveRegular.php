<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveRegularPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveRegularPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveRegularPriority_high;

class UserEntityMainTasksResultPriceSerpLiveRegular 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLiveRegularPriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLiveRegularPriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLiveRegularPriority_high priority_high;
    */
    public $priority_high = null;        
     
}