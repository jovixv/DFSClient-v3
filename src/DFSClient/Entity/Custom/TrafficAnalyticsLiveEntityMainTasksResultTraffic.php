<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficCountries;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficSources;
use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultTrafficEstimated;

#[\AllowDynamicProperties]
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
    * @var array|TrafficAnalyticsLiveEntityMainTasksResultTrafficCountries[] $countries;
    */
    public $countries = [];

    /**
    * @var null|TrafficAnalyticsLiveEntityMainTasksResultTrafficSources $sources;
    */
    public $sources = null;

    /**
    * @var array|TrafficAnalyticsLiveEntityMainTasksResultTrafficEstimated[] $estimated;
    */
    public $estimated = [];
 
}