<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\YelpReviewsGetResultsByTaskIdEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\YelpReviewsGetResultsByTaskIdEntityMainTasksResultItemsUser_profile;
use DFSClientV3\Entity\Custom\YelpReviewsGetResultsByTaskIdEntityMainTasksResultItemsResponses;

#[\AllowDynamicProperties]
class YelpReviewsGetResultsByTaskIdEntityMainTasksResultItems 
{    
    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|integer $rank_group;
    */
    public $rank_group = null;

    /**
    * @var null|integer $rank_absolute;
    */
    public $rank_absolute = null;

    /**
    * @var null|string $position;
    */
    public $position = null;

    /**
    * @var null|string $review_id;
    */
    public $review_id = null;

    /**
    * @var null|YelpReviewsGetResultsByTaskIdEntityMainTasksResultItemsRating $rating;
    */
    public $rating = null;

    /**
    * @var null|string $timestamp;
    */
    public $timestamp = null;

    /**
    * @var null|string $review_text;
    */
    public $review_text = null;

    /**
    * @var null|NULL $review_images;
    */
    public $review_images = null;

    /**
    * @var null|YelpReviewsGetResultsByTaskIdEntityMainTasksResultItemsUser_profile $user_profile;
    */
    public $user_profile = null;

    /**
    * @var array|YelpReviewsGetResultsByTaskIdEntityMainTasksResultItemsResponses[] $responses;
    */
    public $responses = [];
 
}