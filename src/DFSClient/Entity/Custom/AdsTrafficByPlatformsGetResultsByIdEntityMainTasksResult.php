<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdsTrafficByPlatformsGetResultsByIdEntityMainTasksResultDesktop;
use DFSClientV3\Entity\Custom\AdsTrafficByPlatformsGetResultsByIdEntityMainTasksResultMobile;
use DFSClientV3\Entity\Custom\AdsTrafficByPlatformsGetResultsByIdEntityMainTasksResultTablet;

class AdsTrafficByPlatformsGetResultsByIdEntityMainTasksResult
{
    /**
     * @var null|AdsTrafficByPlatformsGetResultsByIdEntityMainTasksResultDesktop;
     */
    public $desktop = null;

    /**
     * @var null|AdsTrafficByPlatformsGetResultsByIdEntityMainTasksResultMobile;
     */
    public $mobile = null;

    /**
     * @var null|AdsTrafficByPlatformsGetResultsByIdEntityMainTasksResultTablet;
     */
    public $tablet = null;
}
