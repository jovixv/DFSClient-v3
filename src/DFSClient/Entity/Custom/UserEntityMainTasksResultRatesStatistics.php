<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDay;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinute;

class UserEntityMainTasksResultRatesStatistics 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDay $day;
    */
    public $day = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinute $minute;
    */
    public $minute = null;
 
}