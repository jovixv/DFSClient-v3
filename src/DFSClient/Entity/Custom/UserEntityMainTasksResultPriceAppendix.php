<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendixEndpoints;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendixErrors;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendixUser_data;

class UserEntityMainTasksResultPriceAppendix 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceAppendixEndpoints $endpoints;
    */
    public $endpoints = null;

    /**
    * @var null|UserEntityMainTasksResultPriceAppendixErrors $errors;
    */
    public $errors = null;

    /**
    * @var null|UserEntityMainTasksResultPriceAppendixUser_data $user_data;
    */
    public $user_data = null;
 
}