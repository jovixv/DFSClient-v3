<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficCountries;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficEstimated;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSources;

class TrafficAnalyticsLiveEntityMainTasksResultTraffic
{
    /**
     * @var null|integer;
     */
    public $value = null;

    /**
     * @var null|integer;
     */
    public $percent = null;

    /**
     * @var array|TrafficAnalyticsLiveEntityMainTasksResultTrafficCountries[];
     */
    public $countries = [];

    /**
     * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSources;
     */
    public $sources = null;

    /**
     * @var array|TrafficAnalyticsLiveEntityMainTasksResultTrafficEstimated[];
     */
    public $estimated = [];
}
