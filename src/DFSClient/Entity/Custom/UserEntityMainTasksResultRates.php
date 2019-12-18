<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimits;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatistics;

class UserEntityMainTasksResultRates 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesLimits $limits;
    */
    public $limits = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatistics $statistics;
    */
    public $statistics = null;
 
}