<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdsTrafficByPlatformsLiveEntityMainTasksResultDesktop;
use DFSClientV3\Entity\Custom\AdsTrafficByPlatformsLiveEntityMainTasksResultMobile;
use DFSClientV3\Entity\Custom\AdsTrafficByPlatformsLiveEntityMainTasksResultTablet;

class AdsTrafficByPlatformsLiveEntityMainTasksResult 
{    
    /**
    * @var null|AdsTrafficByPlatformsLiveEntityMainTasksResultDesktop $desktop;
    */
    public $desktop = null;

    /**
    * @var null|AdsTrafficByPlatformsLiveEntityMainTasksResultMobile $mobile;
    */
    public $mobile = null;

    /**
    * @var null|AdsTrafficByPlatformsLiveEntityMainTasksResultTablet $tablet;
    */
    public $tablet = null;
 
}