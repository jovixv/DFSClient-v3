<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpEndpointsPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpEndpointsPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpEndpointsPriority_high;

class UserEntityMainTasksResultPriceSerpEndpoints 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpEndpointsPriority_low $priority_low;
    */
    public $priority_low = null;

    /**
    * @var null|UserEntityMainTasksResultPriceSerpEndpointsPriority_normal $priority_normal;
    */
    public $priority_normal = null;

    /**
    * @var null|UserEntityMainTasksResultPriceSerpEndpointsPriority_high $priority_high;
    */
    public $priority_high = null;
 
}