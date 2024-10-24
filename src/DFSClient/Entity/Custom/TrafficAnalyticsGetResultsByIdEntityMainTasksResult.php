<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultAudience;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultCategory_rank;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultCountry_rank;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultGlobal_rank;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultSites;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultTraffic;

class TrafficAnalyticsGetResultsByIdEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $site_url = null;

    /**
     * @var null|string;
     */
    public $site_description = null;

    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultGlobal_rank;
     */
    public $global_rank = null;

    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultCountry_rank;
     */
    public $country_rank = null;

    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultCategory_rank;
     */
    public $category_rank = null;

    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultAudience;
     */
    public $audience = null;

    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultTraffic;
     */
    public $traffic = null;

    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultSites;
     */
    public $sites = null;

    /**
     * @var null|string;
     */
    public $date = null;
}
