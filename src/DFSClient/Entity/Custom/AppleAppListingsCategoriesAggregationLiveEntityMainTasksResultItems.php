<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AppleAppListingsCategoriesAggregationLiveEntityMainTasksResultItemsTop_apps;

class AppleAppListingsCategoriesAggregationLiveEntityMainTasksResultItems 
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
    * @var array|AppleAppListingsCategoriesAggregationLiveEntityMainTasksResultItemsTop_apps[] $top_apps;
    */
    public $top_apps = [];
 
}