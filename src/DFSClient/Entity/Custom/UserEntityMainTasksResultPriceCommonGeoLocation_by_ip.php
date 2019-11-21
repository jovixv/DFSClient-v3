<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonGeoLocation_by_ipPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonGeoLocation_by_ipPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonGeoLocation_by_ipPriority_high;

class UserEntityMainTasksResultPriceCommonGeoLocation_by_ip 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonGeoLocation_by_ipPriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonGeoLocation_by_ipPriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonGeoLocation_by_ipPriority_high priority_high;
    */
    public $priority_high = null;        
     
}