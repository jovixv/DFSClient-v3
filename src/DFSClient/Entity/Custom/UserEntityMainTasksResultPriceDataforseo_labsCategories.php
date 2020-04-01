<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceDataforseo_labsCategoriesPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceDataforseo_labsCategoriesPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceDataforseo_labsCategoriesPriority_high;

class UserEntityMainTasksResultPriceDataforseo_labsCategories 
{    
    /**
    * array|UserEntityMainTasksResultPriceDataforseo_labsCategoriesPriority_low[] $priority_low;
    */
    public $priority_low = [];

    /**
    * array|UserEntityMainTasksResultPriceDataforseo_labsCategoriesPriority_normal[] $priority_normal;
    */
    public $priority_normal = [];

    /**
    * array|UserEntityMainTasksResultPriceDataforseo_labsCategoriesPriority_high[] $priority_high;
    */
    public $priority_high = [];
 
}