<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceTraffic_analyticsLivePriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceTraffic_analyticsLivePriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceTraffic_analyticsLivePriority_high;

class UserEntityMainTasksResultPriceTraffic_analyticsLive 
{    
    /**
    * array|UserEntityMainTasksResultPriceTraffic_analyticsLivePriority_low[] $priority_low;
    */
    public $priority_low = [];

    /**
    * array|UserEntityMainTasksResultPriceTraffic_analyticsLivePriority_normal[] $priority_normal;
    */
    public $priority_normal = [];

    /**
    * array|UserEntityMainTasksResultPriceTraffic_analyticsLivePriority_high[] $priority_high;
    */
    public $priority_high = [];
 
}