<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultGlobal_rank;
use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultCountry_rank;
use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultCategory_rank;
use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultAudience;
use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTraffic;
use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultSites;

class GetTrafficAnalyticsResultsByIdModelEntityMainTasksResult 
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
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultGlobal_rank $global_rank;
    */
    public $global_rank = null;

    /**
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultCountry_rank $country_rank;
    */
    public $country_rank = null;

    /**
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultCategory_rank $category_rank;
    */
    public $category_rank = null;

    /**
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultAudience $audience;
    */
    public $audience = null;

    /**
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTraffic $traffic;
    */
    public $traffic = null;

    /**
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultSites $sites;
    */
    public $sites = null;
 
}