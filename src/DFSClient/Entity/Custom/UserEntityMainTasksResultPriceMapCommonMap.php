<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceMapCommonMapPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceMapCommonMapPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceMapCommonMapPriority_high;

class UserEntityMainTasksResultPriceMapCommonMap 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceMapCommonMapPriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceMapCommonMapPriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceMapCommonMapPriority_high priority_high;
    */
    public $priority_high = null;        
     
}