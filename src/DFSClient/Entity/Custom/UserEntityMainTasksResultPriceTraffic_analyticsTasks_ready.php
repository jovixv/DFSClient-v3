<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceTraffic_analyticsTasks_readyPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceTraffic_analyticsTasks_readyPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceTraffic_analyticsTasks_readyPriority_high;

class UserEntityMainTasksResultPriceTraffic_analyticsTasks_ready 
{    
    /**
    * array|UserEntityMainTasksResultPriceTraffic_analyticsTasks_readyPriority_low[] $priority_low;
    */
    public $priority_low = [];

    /**
    * array|UserEntityMainTasksResultPriceTraffic_analyticsTasks_readyPriority_normal[] $priority_normal;
    */
    public $priority_normal = [];

    /**
    * array|UserEntityMainTasksResultPriceTraffic_analyticsTasks_readyPriority_high[] $priority_high;
    */
    public $priority_high = [];
 
}