<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDay;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinute;

class UserEntityMainTasksResultMoneyLimits 
{    
    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsDay $day;
    */
    public $day = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsMinute $minute;
    */
    public $minute = null;
 
}