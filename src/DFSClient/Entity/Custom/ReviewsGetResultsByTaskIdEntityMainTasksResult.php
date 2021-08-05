<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ReviewsGetResultsByTaskIdEntityMainTasksResultItems;

class ReviewsGetResultsByTaskIdEntityMainTasksResult 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

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
    * @var null|string $sub_title;
    */
    public $sub_title = null;

    /**
    * @var null|ReviewsGetResultsByTaskIdEntityMainTasksResultRating $rating;
    */
    public $rating = null;

    /**
    * @var null|string $feature_id;
    */
    public $feature_id = null;

    /**
    * @var null|string $place_id;
    */
    public $place_id = null;

    /**
    * @var null|string $cid;
    */
    public $cid = null;

    /**
    * @var null|integer $reviews_count;
    */
    public $reviews_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|ReviewsGetResultsByTaskIdEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}