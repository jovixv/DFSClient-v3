<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\YelpReviewsGetResultsByTaskIdEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\YelpReviewsGetResultsByTaskIdEntityMainTasksResultItemsResponses;
use DFSClientV3\Entity\Custom\YelpReviewsGetResultsByTaskIdEntityMainTasksResultItemsUser_profile;

class YelpReviewsGetResultsByTaskIdEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|integer;
     */
    public $rank_group = null;

    /**
     * @var null|integer;
     */
    public $rank_absolute = null;

    /**
     * @var null|string;
     */
    public $position = null;

    /**
     * @var null|string;
     */
    public $review_id = null;

    /**
     * @var null|YelpReviewsGetResultsByTaskIdEntityMainTasksResultItemsRating;
     */
    public $rating = null;

    /**
     * @var null|string;
     */
    public $timestamp = null;

    /**
     * @var null|string;
     */
    public $review_text = null;

    /**
     * @var null|null;
     */
    public $review_images = null;

    /**
     * @var null|YelpReviewsGetResultsByTaskIdEntityMainTasksResultItemsUser_profile;
     */
    public $user_profile = null;

    /**
     * @var array|YelpReviewsGetResultsByTaskIdEntityMainTasksResultItemsResponses[];
     */
    public $responses = [];
}
