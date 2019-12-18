<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDay;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinute;

class UserEntityMainTasksResultMoneyStatistics 
{    
    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsDay $day;
    */
    public $day = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsMinute $minute;
    */
    public $minute = null;
 
}