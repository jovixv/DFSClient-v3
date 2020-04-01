<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendixUser_dataPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendixUser_dataPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendixUser_dataPriority_high;

class UserEntityMainTasksResultPriceAppendixUser_data 
{    
    /**
    * array|UserEntityMainTasksResultPriceAppendixUser_dataPriority_low[] $priority_low;
    */
    public $priority_low = [];

    /**
    * array|UserEntityMainTasksResultPriceAppendixUser_dataPriority_normal[] $priority_normal;
    */
    public $priority_normal = [];

    /**
    * array|UserEntityMainTasksResultPriceAppendixUser_dataPriority_high[] $priority_high;
    */
    public $priority_high = [];
 
}