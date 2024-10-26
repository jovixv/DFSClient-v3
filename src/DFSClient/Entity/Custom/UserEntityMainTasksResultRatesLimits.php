<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDay;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinute;

class UserEntityMainTasksResultRatesLimits
{
    /**
     * @var null|UserEntityMainTasksResultRatesLimitsDay;
     */
    public $day = null;

    /**
     * @var null|UserEntityMainTasksResultRatesLimitsMinute;
     */
    public $minute = null;
}
