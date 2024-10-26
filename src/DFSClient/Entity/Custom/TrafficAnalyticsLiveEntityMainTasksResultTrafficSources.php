<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesDirect;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesDisplay_ad;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesMail;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesMobile_apps;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesReferral_destination;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesReferring;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesSearch_ad;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesSearch_organic;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesSocial;

class TrafficAnalyticsLiveEntityMainTasksResultTrafficSources
{
    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesDirect;
     */
    public $direct = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesSearch_organic;
     */
    public $search_organic = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesSearch_ad;
     */
    public $search_ad = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesReferring;
     */
    public $referring = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesReferral_destination;
     */
    public $referral_destination = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesSocial;
     */
    public $social = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesDisplay_ad;
     */
    public $display_ad = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesMobile_apps;
     */
    public $mobile_apps = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSourcesMail;
     */
    public $mail = null;
}
