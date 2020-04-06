<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveRegularPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveRegularPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveRegularPriority_high;

class UserEntityMainTasksResultPriceSerpLiveRegular 
{    
    /**
    * array|UserEntityMainTasksResultPriceSerpLiveRegularPriority_low[] $priority_low;
    */
    public $priority_low = [];

    /**
    * array|UserEntityMainTasksResultPriceSerpLiveRegularPriority_normal[] $priority_normal;
    */
    public $priority_normal = [];

    /**
    * array|UserEntityMainTasksResultPriceSerpLiveRegularPriority_high[] $priority_high;
    */
    public $priority_high = [];
 
}