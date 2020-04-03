<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultGlobal_rank;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultCountry_rank;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultCategory_rank;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultAudience;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultTraffic;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultSites;

class TrafficAnalyticsGetResultsByIdEntityMainTasksResult 
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
    * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultGlobal_rank $global_rank;
    */
    public $global_rank = null;

    /**
    * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultCountry_rank $country_rank;
    */
    public $country_rank = null;

    /**
    * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultCategory_rank $category_rank;
    */
    public $category_rank = null;

    /**
    * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultAudience $audience;
    */
    public $audience = null;

    /**
    * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultTraffic $traffic;
    */
    public $traffic = null;

    /**
    * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultSites $sites;
    */
    public $sites = null;

    /**
    * @var null|string $date;
    */
    public $date = null;
 
}