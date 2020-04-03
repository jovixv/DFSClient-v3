<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultGlobal_rank;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultCountry_rank;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultCategory_rank;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultAudience;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTraffic;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultSites;

class TrafficAnalyticsLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $site_url;
    */
    public $site_url = null;

    /**
    * @var null|string $site_description;
    */
    public $site_description = null;

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultGlobal_rank $global_rank;
    */
    public $global_rank = null;

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultCountry_rank $country_rank;
    */
    public $country_rank = null;

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultCategory_rank $category_rank;
    */
    public $category_rank = null;

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultAudience $audience;
    */
    public $audience = null;

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultTraffic $traffic;
    */
    public $traffic = null;

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultSites $sites;
    */
    public $sites = null;

    /**
    * @var null|string $date;
    */
    public $date = null;
 
}