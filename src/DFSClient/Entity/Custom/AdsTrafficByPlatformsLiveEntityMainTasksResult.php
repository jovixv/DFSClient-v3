<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdsTrafficByPlatformsLiveEntityMainTasksResultDesktop;
use DFSClientV3\Entity\Custom\AdsTrafficByPlatformsLiveEntityMainTasksResultMobile;
use DFSClientV3\Entity\Custom\AdsTrafficByPlatformsLiveEntityMainTasksResultTablet;

class AdsTrafficByPlatformsLiveEntityMainTasksResult
{
    /**
     * @var null|AdsTrafficByPlatformsLiveEntityMainTasksResultDesktop;
     */
    public $desktop = null;

    /**
     * @var null|AdsTrafficByPlatformsLiveEntityMainTasksResultMobile;
     */
    public $mobile = null;

    /**
     * @var null|AdsTrafficByPlatformsLiveEntityMainTasksResultTablet;
     */
    public $tablet = null;
}
