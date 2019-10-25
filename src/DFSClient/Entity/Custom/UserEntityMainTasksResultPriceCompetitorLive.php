<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCompetitorLivePriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCompetitorLivePriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCompetitorLivePriority_high;

class UserEntityMainTasksResultPriceCompetitorLive 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceCompetitorLivePriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCompetitorLivePriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCompetitorLivePriority_high priority_high;
    */
    public $priority_high = null;        
     
}
