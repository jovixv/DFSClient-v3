<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpTask_postPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpTask_postPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpTask_postPriority_high;

class UserEntityMainTasksResultPriceSerpTask_post 
{    
    /**
    * array|UserEntityMainTasksResultPriceSerpTask_postPriority_low[] $priority_low;
    */
    public $priority_low = [];

    /**
    * array|UserEntityMainTasksResultPriceSerpTask_postPriority_normal[] $priority_normal;
    */
    public $priority_normal = [];

    /**
    * array|UserEntityMainTasksResultPriceSerpTask_postPriority_high[] $priority_high;
    */
    public $priority_high = [];
 
}