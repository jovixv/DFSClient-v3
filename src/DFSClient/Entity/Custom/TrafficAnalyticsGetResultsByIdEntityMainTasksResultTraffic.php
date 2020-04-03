<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficCountries;
use DFSClientV3\Entity\Custom\TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSources;

class TrafficAnalyticsGetResultsByIdEntityMainTasksResultTraffic 
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
    * array|TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficCountries[] $countries;
    */
    public $countries = [];

    /**
    * @var null|TrafficAnalyticsGetResultsByIdEntityMainTasksResultTrafficSources $sources;
    */
    public $sources = null;

    /**
    * @var null|array $estimated;
    */
    public $estimated = null;
 
}