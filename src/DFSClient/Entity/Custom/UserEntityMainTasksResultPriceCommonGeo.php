<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonGeoLocation_by_coordinate;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonGeoLocation_by_ip;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonGeoLocation_country_by_coordinate;

class UserEntityMainTasksResultPriceCommonGeo 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonGeoLocation_by_coordinate location_by_coordinate;
    */
    public $location_by_coordinate = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonGeoLocation_by_ip location_by_ip;
    */
    public $location_by_ip = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonGeoLocation_country_by_coordinate location_country_by_coordinate;
    */
    public $location_country_by_coordinate = null;        
     
}