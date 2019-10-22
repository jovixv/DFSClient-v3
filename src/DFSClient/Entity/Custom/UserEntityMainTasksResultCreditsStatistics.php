<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsDay;
use DFSClient\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsMinute;

class UserEntityMainTasksResultCreditsStatistics 
{    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsDay day;
    */
    public $day = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsMinute minute;
    */
    public $minute = null;        
     
}