<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpLivePriority_low;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpLivePriority_normal;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpLivePriority_high;

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