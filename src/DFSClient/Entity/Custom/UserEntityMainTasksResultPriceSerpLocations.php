<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLocationsPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLocationsPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLocationsPriority_high;

class UserEntityMainTasksResultPriceSerpLocations 
{    
    /**
    * array|UserEntityMainTasksResultPriceSerpLocationsPriority_low[] $priority_low;
    */
    public $priority_low = [];

    /**
    * array|UserEntityMainTasksResultPriceSerpLocationsPriority_normal[] $priority_normal;
    */
    public $priority_normal = [];

    /**
    * array|UserEntityMainTasksResultPriceSerpLocationsPriority_high[] $priority_high;
    */
    public $priority_high = [];
 
}