<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDay;
use DFSClient\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinute;

class UserEntityMainTasksResultRatesStatistics 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDay day;
    */
    public $day = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinute minute;
    */
    public $minute = null;        
     
}