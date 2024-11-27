<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItemsUser_profile;
use DFSClientV3\Entity\Custom\TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItemsResponses;

#[\AllowDynamicProperties]
class TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItems 
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
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var null|TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItemsRating $rating;
    */
    public $rating = null;

    /**
    * @var null|string $date_of_visit;
    */
    public $date_of_visit = null;

    /**
    * @var null|string $timestamp;
    */
    public $timestamp = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|string $review_text;
    */
    public $review_text = null;

    /**
    * @var null|NULL $review_images;
    */
    public $review_images = null;

    /**
    * @var null|TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItemsUser_profile $user_profile;
    */
    public $user_profile = null;

    /**
    * @var array|TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItemsResponses[] $responses;
    */
    public $responses = [];
 
}