<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleAppListingsCategoriesAggregationLiveEntityMainTasksResultItemsTop_apps;

class GoogleAppListingsCategoriesAggregationLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $category;
    */
    public $category = null;

    /**
    * @var null|integer $count;
    */
    public $count = null;

    /**
    * @var null|integer $sum_reviews;
    */
    public $sum_reviews = null;

    /**
    * @var array|GoogleAppListingsCategoriesAggregationLiveEntityMainTasksResultItemsTop_apps[] $top_apps;
    */
    public $top_apps = [];
 
}