<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleAppListingsAvailableFiltersEntityMainTasksResultCategories_aggregation;
use DFSClientV3\Entity\Custom\GoogleAppListingsAvailableFiltersEntityMainTasksResultSearch;

class GoogleAppListingsAvailableFiltersEntityMainTasksResult
{
    /**
     * @var null|GoogleAppListingsAvailableFiltersEntityMainTasksResultSearch;
     */
    public $search = null;

    /**
     * @var null|GoogleAppListingsAvailableFiltersEntityMainTasksResultCategories_aggregation;
     */
    public $categories_aggregation = null;
}
