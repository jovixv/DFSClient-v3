<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLivePriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLivePriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLivePriority_high;

class UserEntityMainTasksResultPriceSerpLive 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLivePriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLivePriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLivePriority_high priority_high;
    */
    public $priority_high = null;        
     
}
