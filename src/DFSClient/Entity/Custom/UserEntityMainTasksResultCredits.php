<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsLimits;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatistics;

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