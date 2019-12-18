<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendixUser_dataPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendixUser_dataPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendixUser_dataPriority_high;

class UserEntityMainTasksResultPriceAppendixUser_data 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceAppendixUser_dataPriority_low $priority_low;
    */
    public $priority_low = null;

    /**
    * @var null|UserEntityMainTasksResultPriceAppendixUser_dataPriority_normal $priority_normal;
    */
    public $priority_normal = null;

    /**
    * @var null|UserEntityMainTasksResultPriceAppendixUser_dataPriority_high $priority_high;
    */
    public $priority_high = null;
 
}