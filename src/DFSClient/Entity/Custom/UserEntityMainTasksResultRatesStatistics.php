<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDay;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinute;

class UserEntityMainTasksResultRatesStatistics
{
    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsDay;
     */
    public $day = null;

    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsMinute;
     */
    public $minute = null;
}
