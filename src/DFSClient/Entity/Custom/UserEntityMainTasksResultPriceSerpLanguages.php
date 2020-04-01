<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLanguagesPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLanguagesPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLanguagesPriority_high;

class UserEntityMainTasksResultPriceSerpLanguages 
{    
    /**
    * array|UserEntityMainTasksResultPriceSerpLanguagesPriority_low[] $priority_low;
    */
    public $priority_low = [];

    /**
    * array|UserEntityMainTasksResultPriceSerpLanguagesPriority_normal[] $priority_normal;
    */
    public $priority_normal = [];

    /**
    * array|UserEntityMainTasksResultPriceSerpLanguagesPriority_high[] $priority_high;
    */
    public $priority_high = [];
 
}