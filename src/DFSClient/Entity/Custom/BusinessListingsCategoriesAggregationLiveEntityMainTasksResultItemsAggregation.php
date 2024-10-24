<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BusinessListingsCategoriesAggregationLiveEntityMainTasksResultItemsAggregationTop_attributes;
use DFSClientV3\Entity\Custom\BusinessListingsCategoriesAggregationLiveEntityMainTasksResultItemsAggregationTop_categories;
use DFSClientV3\Entity\Custom\BusinessListingsCategoriesAggregationLiveEntityMainTasksResultItemsAggregationTop_countries;
use DFSClientV3\Entity\Custom\BusinessListingsCategoriesAggregationLiveEntityMainTasksResultItemsAggregationTop_place_topics;

class BusinessListingsCategoriesAggregationLiveEntityMainTasksResultItemsAggregation
{
    /**
     * @var null|BusinessListingsCategoriesAggregationLiveEntityMainTasksResultItemsAggregationTop_categories;
     */
    public $top_categories = null;

    /**
     * @var null|BusinessListingsCategoriesAggregationLiveEntityMainTasksResultItemsAggregationTop_countries;
     */
    public $top_countries = null;

    /**
     * @var null|integer;
     */
    public $websites_count = null;

    /**
     * @var null|integer;
     */
    public $count = null;

    /**
     * @var null|BusinessListingsCategoriesAggregationLiveEntityMainTasksResultItemsAggregationTop_attributes;
     */
    public $top_attributes = null;

    /**
     * @var null|BusinessListingsCategoriesAggregationLiveEntityMainTasksResultItemsAggregationTop_place_topics;
     */
    public $top_place_topics = null;
}
