<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesDirect;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesSearch_organic;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesSearch_ad;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesReferring;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesReferral_destination;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesSocial;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesMobile_apps;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesMail;

class TrafficAnalyticsLiveEntityMainTasksResultTrafficSources 
{    
    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesDirect $direct;
    */
    public $direct = null;

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesSearch_organic $search_organic;
    */
    public $search_organic = null;

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesSearch_ad $search_ad;
    */
    public $search_ad = null;

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesReferring $referring;
    */
    public $referring = null;

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesReferral_destination $referral_destination;
    */
    public $referral_destination = null;

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesSocial $social;
    */
    public $social = null;

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesMobile_apps $mobile_apps;
    */
    public $mobile_apps = null;

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesMail $mail;
    */
    public $mail = null;
 
}