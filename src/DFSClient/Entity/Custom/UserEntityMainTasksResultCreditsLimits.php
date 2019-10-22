<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultCreditsLimitsDay;
use DFSClient\Entity\Custom\UserEntityMainTasksResultCreditsLimitsMinute;

class UserEntityMainTasksResultCreditsLimits 
{    
    /**
    * @var null|UserEntityMainTasksResultCreditsLimitsDay day;
    */
    public $day = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsLimitsMinute minute;
    */
    public $minute = null;        
     
}