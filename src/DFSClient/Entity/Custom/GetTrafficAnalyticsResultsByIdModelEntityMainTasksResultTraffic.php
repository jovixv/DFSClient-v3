<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficCountries;
use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSources;

class GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTraffic 
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
    * array|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficCountries[] $countries;
    */
    public $countries = [];

    /**
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSources $sources;
    */
    public $sources = null;

    /**
    * @var null|NULL $estimated;
    */
    public $estimated = null;
 
}