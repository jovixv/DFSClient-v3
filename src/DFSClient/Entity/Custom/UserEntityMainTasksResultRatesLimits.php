<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultRatesLimitsDay;
use DFSClient\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinute;

class UserEntityMainTasksResultRatesLimits 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDay day;
    */
    public $day = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsMinute minute;
    */
    public $minute = null;        
     
}