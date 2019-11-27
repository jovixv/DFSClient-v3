<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonServiceTask_resultPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonServiceTask_resultPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonServiceTask_resultPriority_high;

class UserEntityMainTasksResultPriceCommonServiceTask_result 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonServiceTask_resultPriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonServiceTask_resultPriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonServiceTask_resultPriority_high priority_high;
    */
    public $priority_high = null;        
     
}