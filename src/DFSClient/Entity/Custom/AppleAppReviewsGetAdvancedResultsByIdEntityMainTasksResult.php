<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AppleAppReviewsGetAdvancedResultsByIdEntityMainTasksResultRating;

#[\AllowDynamicProperties]
class AppleAppReviewsGetAdvancedResultsByIdEntityMainTasksResult 
{    
    /**
    * @var null|string $app_id;
    */
    public $app_id = null;

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
    * @var null|string $datetime;
    */
    public $datetime = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|AppleAppReviewsGetAdvancedResultsByIdEntityMainTasksResultRating $rating;
    */
    public $rating = null;

    /**
    * @var null|NULL $reviews_count;
    */
    public $reviews_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|AppleAppReviewsGetAdvancedResultsByIdEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}