<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultRates;
use DFSClient\Entity\Custom\UserEntityMainTasksResultCredits;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPrice;

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