<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonMapPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonMapPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonMapPriority_high;

class UserEntityMainTasksResultPriceCommonMap 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonMapPriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonMapPriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonMapPriority_high priority_high;
    */
    public $priority_high = null;        
     
}