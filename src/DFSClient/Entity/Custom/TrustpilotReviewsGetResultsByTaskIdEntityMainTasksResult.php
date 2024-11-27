<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrustpilotReviewsGetResultsByTaskIdEntityMainTasksResultRating;

#[\AllowDynamicProperties]
class TrustpilotReviewsGetResultsByTaskIdEntityMainTasksResult 
{    
    /**
    * @var null|string $domain;
    */
    public $domain = null;

    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|string $se_domain;
    */
    public $se_domain = null;

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
    * @var null|string $location;
    */
    public $location = null;

    /**
    * @var null|integer $reviews_count;
    */
    public $reviews_count = null;

    /**
    * @var null|TrustpilotReviewsGetResultsByTaskIdEntityMainTasksResultRating $rating;
    */
    public $rating = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|TrustpilotReviewsGetResultsByTaskIdEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}