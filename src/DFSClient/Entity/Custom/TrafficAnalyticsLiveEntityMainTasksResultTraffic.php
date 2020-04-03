<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficCountries;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSources;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficEstimated;

class TrafficAnalyticsLiveEntityMainTasksResultTraffic 
{    
    /**
    * @var null|integer $value;
    */
    public $value = null;

    /**
    * @var null|integer $percent;
    */
    public $percent = null;

    /**
    * array|TrafficAnalyticsLiveEntityMainTasksResultTrafficCountries[] $countries;
    */
    public $countries = [];

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSources $sources;
    */
    public $sources = null;

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficEstimated $estimated;
    */
    public $estimated = null;
 
}