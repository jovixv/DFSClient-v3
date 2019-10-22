<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultCreditsLimits;
use DFSClient\Entity\Custom\UserEntityMainTasksResultCreditsStatistics;

class UserEntityMainTasksResultCredits 
{    
    /**
    * @var null|integer total;
    */
    public $total = null;        
    
    /**
    * @var null|double balance;
    */
    public $balance = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsLimits limits;
    */
    public $limits = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatistics statistics;
    */
    public $statistics = null;        
     
}