<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HotelInfoGetAdvancedResultsByIdEntityMainTasksResultReviewsOther_sites_reviews;

class HotelInfoGetAdvancedResultsByIdEntityMainTasksResultReviews
{
    /**
     * @var null|double;
     */
    public $value = null;

    /**
     * @var null|integer;
     */
    public $votes_count = null;

    /**
     * @var array|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultReviewsMentions[];
     */
    public $mentions = [];

    /**
     * @var null|array;
     */
    public $rating_distribution = null;

    /**
     * @var array|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultReviewsOther_sites_reviews[];
     */
    public $other_sites_reviews = [];
}
