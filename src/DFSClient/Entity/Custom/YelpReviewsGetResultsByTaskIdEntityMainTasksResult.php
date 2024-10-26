<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\YelpReviewsGetResultsByTaskIdEntityMainTasksResultRating;

class YelpReviewsGetResultsByTaskIdEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $keyword = null;

    /**
     * @var null|string;
     */
    public $alias = null;

    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|string;
     */
    public $se_domain = null;

    /**
     * @var null|int;
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
     * @var null|YelpReviewsGetResultsByTaskIdEntityMainTasksResultRating;
     */
    public $rating = null;

    /**
     * @var null|integer;
     */
    public $reviews_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|YelpReviewsGetResultsByTaskIdEntityMainTasksResultItems[];
     */
    public $items = [];
}
