<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItemsResponses;
use DFSClientV3\Entity\Custom\TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItemsUser_profile;

class TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItems
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
    public $url = null;

    /**
     * @var null|TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItemsRating;
     */
    public $rating = null;

    /**
     * @var null|string;
     */
    public $date_of_visit = null;

    /**
     * @var null|string;
     */
    public $timestamp = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|string;
     */
    public $review_text = null;

    /**
     * @var null|null;
     */
    public $review_images = null;

    /**
     * @var null|TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItemsUser_profile;
     */
    public $user_profile = null;

    /**
     * @var array|TripadvisorReviewsGetResultsByTaskIdEntityMainTasksResultItemsResponses[];
     */
    public $responses = [];
}
