<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpLanguagesPriority_low;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpLanguagesPriority_normal;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerpLanguagesPriority_high;

class UserEntityMainTasksResultPriceSerpLanguages 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLanguagesPriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLanguagesPriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLanguagesPriority_high priority_high;
    */
    public $priority_high = null;        
     
}