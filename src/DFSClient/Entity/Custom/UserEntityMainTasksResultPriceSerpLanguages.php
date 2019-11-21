<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLanguagesPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLanguagesPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLanguagesPriority_high;

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