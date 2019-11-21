<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRates;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCredits;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPrice;

class UserEntityMainTasksResult 
{    
    /**
    * @var null|string login;
    */
    public $login = null;        
    
    /**
    * @var null|string timezone;
    */
    public $timezone = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRates rates;
    */
    public $rates = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCredits credits;
    */
    public $credits = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPrice price;
    */
    public $price = null;        
     
}