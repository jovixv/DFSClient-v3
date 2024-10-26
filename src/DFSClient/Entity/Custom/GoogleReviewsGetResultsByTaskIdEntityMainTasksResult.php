<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleReviewsGetResultsByTaskIdEntityMainTasksResultItems;

class GoogleReviewsGetResultsByTaskIdEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $keyword = null;

    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|string;
     */
    public $se_domain = null;

    /**
     * @var null|integer;
     */
    public $location_code = null;

    /**
     * @var null|string;
     */
    public $language_code = null;

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
    public $sub_title = null;

    /**
     * @var null|GoogleReviewsGetResultsByTaskIdEntityMainTasksResultRating;
     */
    public $rating = null;

    /**
     * @var null|string;
     */
    public $feature_id = null;

    /**
     * @var null|string;
     */
    public $place_id = null;

    /**
     * @var null|string;
     */
    public $cid = null;

    /**
     * @var null|integer;
     */
    public $reviews_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|GoogleReviewsGetResultsByTaskIdEntityMainTasksResultItems[];
     */
    public $items = [];
}
