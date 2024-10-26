<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrustpilotReviewsGetResultsByTaskIdEntityMainTasksResultRating;

class TrustpilotReviewsGetResultsByTaskIdEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $domain = null;

    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|string;
     */
    public $se_domain = null;

    /**
     * @var null|string;
     */
    public $check_url = null;

    /**
     * @var null|string;
     */
    public $datetime = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|string;
     */
    public $location = null;

    /**
     * @var null|integer;
     */
    public $reviews_count = null;

    /**
     * @var null|TrustpilotReviewsGetResultsByTaskIdEntityMainTasksResultRating;
     */
    public $rating = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|TrustpilotReviewsGetResultsByTaskIdEntityMainTasksResultItems[];
     */
    public $items = [];
}
