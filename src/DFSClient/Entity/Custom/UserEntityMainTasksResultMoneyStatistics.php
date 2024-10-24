<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDay;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinute;

class UserEntityMainTasksResultMoneyStatistics
{
    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDay;
     */
    public $day = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsMinute;
     */
    public $minute = null;
}
