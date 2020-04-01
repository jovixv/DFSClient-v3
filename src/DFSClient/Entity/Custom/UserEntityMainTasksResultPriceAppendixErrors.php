<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendixErrorsPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendixErrorsPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendixErrorsPriority_high;

class UserEntityMainTasksResultPriceAppendixErrors 
{    
    /**
    * array|UserEntityMainTasksResultPriceAppendixErrorsPriority_low[] $priority_low;
    */
    public $priority_low = [];

    /**
    * array|UserEntityMainTasksResultPriceAppendixErrorsPriority_normal[] $priority_normal;
    */
    public $priority_normal = [];

    /**
    * array|UserEntityMainTasksResultPriceAppendixErrorsPriority_high[] $priority_high;
    */
    public $priority_high = [];
 
}