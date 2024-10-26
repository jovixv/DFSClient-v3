<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultAudience;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultCategory_rank;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultCountry_rank;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultEmployees;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultGlobal_rank;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultHeadquarters;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultRevenue;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultSites;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTraffic;

class TrafficAnalyticsLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $site_url = null;

    /**
     * @var null|string;
     */
    public $company_name = null;

    /**
     * @var null|string;
     */
    public $site_description = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultGlobal_rank;
     */
    public $global_rank = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultCountry_rank;
     */
    public $country_rank = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultCategory_rank;
     */
    public $category_rank = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultHeadquarters;
     */
    public $headquarters = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultRevenue;
     */
    public $revenue = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultEmployees;
     */
    public $employees = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultAudience;
     */
    public $audience = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultTraffic;
     */
    public $traffic = null;

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultSites;
     */
    public $sites = null;

    /**
     * @var null|string;
     */
    public $date = null;
}
