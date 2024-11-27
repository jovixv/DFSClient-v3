<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResult 
{    
    /**
    * @var null|string $url_path;
    */
    public $url_path = null;

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
    * @var null|NULL $title;
    */
    public $title = null;

    /**
    * @var null|NULL $location;
    */
    public $location = null;

    /**
    * @var null|NULL $reviews_count;
    */
    public $reviews_count = null;

    /**
    * @var null|NULL $rating;
    */
    public $rating = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}