<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultRatesLimits;
use DFSClient\Entity\Custom\UserEntityMainTasksResultRatesStatistics;

class UserEntityMainTasksResultRates 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesLimits limits;
    */
    public $limits = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatistics statistics;
    */
    public $statistics = null;        
     
}