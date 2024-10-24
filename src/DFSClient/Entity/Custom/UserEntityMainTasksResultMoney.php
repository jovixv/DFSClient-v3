<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimits;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatistics;

class UserEntityMainTasksResultMoney
{
    /**
     * @var null|integer;
     */
    public $total = null;

    /**
     * @var null|double;
     */
    public $balance = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyLimits;
     */
    public $limits = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatistics;
     */
    public $statistics = null;
}
