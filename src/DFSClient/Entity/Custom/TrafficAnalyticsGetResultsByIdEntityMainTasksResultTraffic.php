<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficCountries;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSources;

class TrafficAnalyticsGetResultsByIdEntityMainTasksResultTraffic
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
     * array|TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficCountries[] $countries;.
     */
    public $countries = [];

    /**
     * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSources;
     */
    public $sources = null;

    /**
     * @var null|array;
     */
    public $estimated = null;
}
