<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleExtendedReviewsGetResultsByTaskIdEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\GoogleExtendedReviewsGetResultsByTaskIdEntityMainTasksResultItemsImages;
use DFSClientV3\Entity\Custom\GoogleExtendedReviewsGetResultsByTaskIdEntityMainTasksResultItemsReview_highlights;
use DFSClientV3\Entity\Custom\GoogleExtendedReviewsGetResultsByTaskIdEntityMainTasksResultItemsSource;

#[\AllowDynamicProperties]
class GoogleExtendedReviewsGetResultsByTaskIdEntityMainTasksResultItems 
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
    * @var null|string $xpath;
    */
    public $xpath = null;

    /**
    * @var null|string $review_text;
    */
    public $review_text = null;

    /**
    * @var null|string $original_review_text;
    */
    public $original_review_text = null;

    /**
    * @var null|string $time_ago;
    */
    public $time_ago = null;

    /**
    * @var null|string $timestamp;
    */
    public $timestamp = null;

    /**
    * @var null|GoogleExtendedReviewsGetResultsByTaskIdEntityMainTasksResultItemsRating $rating;
    */
    public $rating = null;

    /**
    * @var null|integer $reviews_count;
    */
    public $reviews_count = null;

    /**
    * @var null|integer $photos_count;
    */
    public $photos_count = null;

    /**
    * @var null|boolean $local_guide;
    */
    public $local_guide = null;

    /**
    * @var null|string $profile_name;
    */
    public $profile_name = null;

    /**
    * @var null|string $profile_url;
    */
    public $profile_url = null;

    /**
    * @var null|string $review_url;
    */
    public $review_url = null;

    /**
    * @var null|string $profile_image_url;
    */
    public $profile_image_url = null;

    /**
    * @var null|string $owner_answer;
    */
    public $owner_answer = null;

    /**
    * @var null|string $original_owner_answer;
    */
    public $original_owner_answer = null;

    /**
    * @var null|string $owner_time_ago;
    */
    public $owner_time_ago = null;

    /**
    * @var null|string $owner_timestamp;
    */
    public $owner_timestamp = null;

    /**
    * @var null|string $review_id;
    */
    public $review_id = null;

    /**
    * @var array|GoogleExtendedReviewsGetResultsByTaskIdEntityMainTasksResultItemsImages[] $images;
    */
    public $images = [];

    /**
    * @var array|GoogleExtendedReviewsGetResultsByTaskIdEntityMainTasksResultItemsReview_highlights[] $review_highlights;
    */
    public $review_highlights = [];

    /**
    * @var null|GoogleExtendedReviewsGetResultsByTaskIdEntityMainTasksResultItemsSource $source;
    */
    public $source = null;
 
}