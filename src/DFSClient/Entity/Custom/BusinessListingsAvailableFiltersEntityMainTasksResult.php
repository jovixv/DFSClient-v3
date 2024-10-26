<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BusinessListingsAvailableFiltersEntityMainTasksResultCategories_aggregation;
use DFSClientV3\Entity\Custom\BusinessListingsAvailableFiltersEntityMainTasksResultSearch;

class BusinessListingsAvailableFiltersEntityMainTasksResult
{
    /**
     * @var null|BusinessListingsAvailableFiltersEntityMainTasksResultSearch;
     */
    public $search = null;

    /**
     * @var null|BusinessListingsAvailableFiltersEntityMainTasksResultCategories_aggregation;
     */
    public $categories_aggregation = null;
}
