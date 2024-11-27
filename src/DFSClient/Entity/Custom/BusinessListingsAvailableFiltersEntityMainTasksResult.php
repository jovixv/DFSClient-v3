<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BusinessListingsAvailableFiltersEntityMainTasksResultSearch;
use DFSClientV3\Entity\Custom\BusinessListingsAvailableFiltersEntityMainTasksResultCategories_aggregation;

#[\AllowDynamicProperties]
class BusinessListingsAvailableFiltersEntityMainTasksResult 
{    
    /**
    * @var null|BusinessListingsAvailableFiltersEntityMainTasksResultSearch $search;
    */
    public $search = null;

    /**
    * @var null|BusinessListingsAvailableFiltersEntityMainTasksResultCategories_aggregation $categories_aggregation;
    */
    public $categories_aggregation = null;
 
}