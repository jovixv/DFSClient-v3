<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdsTrafficByPlatformsGetResultsByIdEntityMainTasksResultDesktop;
use DFSClientV3\Entity\Custom\AdsTrafficByPlatformsGetResultsByIdEntityMainTasksResultMobile;
use DFSClientV3\Entity\Custom\AdsTrafficByPlatformsGetResultsByIdEntityMainTasksResultTablet;

class AdsTrafficByPlatformsGetResultsByIdEntityMainTasksResult 
{    
    /**
    * @var null|AdsTrafficByPlatformsGetResultsByIdEntityMainTasksResultDesktop $desktop;
    */
    public $desktop = null;

    /**
    * @var null|AdsTrafficByPlatformsGetResultsByIdEntityMainTasksResultMobile $mobile;
    */
    public $mobile = null;

    /**
    * @var null|AdsTrafficByPlatformsGetResultsByIdEntityMainTasksResultTablet $tablet;
    */
    public $tablet = null;
 
}