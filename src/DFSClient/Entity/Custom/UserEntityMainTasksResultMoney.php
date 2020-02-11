<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimits;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatistics;

class UserEntityMainTasksResultMoney 
{    
    /**
    * @var null|integer $total;
    */
    public $total = null;

    /**
    * @var null|double $balance;
    */
    public $balance = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyLimits $limits;
    */
    public $limits = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyStatistics $statistics;
    */
    public $statistics = null;
 
}