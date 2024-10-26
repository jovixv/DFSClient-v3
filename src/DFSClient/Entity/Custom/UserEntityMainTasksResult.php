<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoney;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPrice;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRates;

class UserEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $login = null;

    /**
     * @var null|string;
     */
    public $timezone = null;

    /**
     * @var null|UserEntityMainTasksResultRates;
     */
    public $rates = null;

    /**
     * @var null|UserEntityMainTasksResultMoney;
     */
    public $money = null;

    /**
     * @var null|UserEntityMainTasksResultPrice;
     */
    public $price = null;
}
