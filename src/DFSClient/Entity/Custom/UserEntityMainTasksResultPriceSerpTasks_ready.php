<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpTasks_readyPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpTasks_readyPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpTasks_readyPriority_high;

class UserEntityMainTasksResultPriceSerpTasks_ready 
{    
    /**
    * array|UserEntityMainTasksResultPriceSerpTasks_readyPriority_low[] $priority_low;
    */
    public $priority_low = [];

    /**
    * array|UserEntityMainTasksResultPriceSerpTasks_readyPriority_normal[] $priority_normal;
    */
    public $priority_normal = [];

    /**
    * array|UserEntityMainTasksResultPriceSerpTasks_readyPriority_high[] $priority_high;
    */
    public $priority_high = [];
 
}