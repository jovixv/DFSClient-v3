<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesDirect;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesMail;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesMobile_apps;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesReferral_destination;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesReferring;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesSearch_ad;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesSearch_organic;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesSocial;

class TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSources
{
    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesDirect;
     */
    public $direct = null;

    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesSearch_organic;
     */
    public $search_organic = null;

    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesSearch_ad;
     */
    public $search_ad = null;

    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesReferring;
     */
    public $referring = null;

    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesReferral_destination;
     */
    public $referral_destination = null;

    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesSocial;
     */
    public $social = null;

    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesMobile_apps;
     */
    public $mobile_apps = null;

    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSourcesMail;
     */
    public $mail = null;
}
