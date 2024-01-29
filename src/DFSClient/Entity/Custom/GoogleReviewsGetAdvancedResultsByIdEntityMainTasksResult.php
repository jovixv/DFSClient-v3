<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResultRating;
use DFSClientV3\Entity\Custom\GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResultRating_groups;
use DFSClientV3\Entity\Custom\GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResultTop_keywords;

class GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResult 
{    
    /**
    * @var null|string $product_id;
    */
    public $product_id = null;

    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|string $se_domain;
    */
    public $se_domain = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|string $check_url;
    */
    public $check_url = null;

    /**
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var null|string $datetime;
    */
    public $datetime = null;

    /**
    * @var null|NULL $spell;
    */
    public $spell = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|string $image_url;
    */
    public $image_url = null;

    /**
    * @var null|GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResultRating $rating;
    */
    public $rating = null;

    /**
    * @var array|GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResultRating_groups[] $rating_groups;
    */
    public $rating_groups = [];

    /**
    * @var array|GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResultTop_keywords[] $top_keywords;
    */
    public $top_keywords = [];

    /**
    * @var null|integer $reviews_count;
    */
    public $reviews_count = null;

    /**
    * @var null|array $item_types;
    */
    public $item_types = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}