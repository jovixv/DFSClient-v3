<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HotelInfoGetAdvancedResultsByIdEntityMainTasksResultReviewsOther_sites_reviews;

class HotelInfoGetAdvancedResultsByIdEntityMainTasksResultReviews 
{    
    /**
    * @var null|double $value;
    */
    public $value = null;

    /**
    * @var null|integer $votes_count;
    */
    public $votes_count = null;

    /**
    * @var array|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultReviewsMentions[] $mentions;
    */
    public $mentions = [];

    /**
    * @var null|array $rating_distribution;
    */
    public $rating_distribution = null;

    /**
    * @var array|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultReviewsOther_sites_reviews[] $other_sites_reviews;
    */
    public $other_sites_reviews = [];
 
}