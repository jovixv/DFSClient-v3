<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveAdvancedPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveAdvancedPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveAdvancedPriority_high;

class UserEntityMainTasksResultPriceSerpLiveAdvanced 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLiveAdvancedPriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLiveAdvancedPriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLiveAdvancedPriority_high priority_high;
    */
    public $priority_high = null;        
     
}