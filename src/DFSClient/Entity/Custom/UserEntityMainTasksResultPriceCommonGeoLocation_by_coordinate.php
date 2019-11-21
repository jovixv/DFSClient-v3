<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonGeoLocation_by_coordinatePriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonGeoLocation_by_coordinatePriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonGeoLocation_by_coordinatePriority_high;

class UserEntityMainTasksResultPriceCommonGeoLocation_by_coordinate 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonGeoLocation_by_coordinatePriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonGeoLocation_by_coordinatePriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonGeoLocation_by_coordinatePriority_high priority_high;
    */
    public $priority_high = null;        
     
}