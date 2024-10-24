<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResultRating;
use DFSClientV3\Entity\Custom\GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResultRating_groups;
use DFSClientV3\Entity\Custom\GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResultTop_keywords;

class GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $product_id = null;

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
    public $url = null;

    /**
     * @var null|string;
     */
    public $datetime = null;

    /**
     * @var null|null;
     */
    public $spell = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|string;
     */
    public $image_url = null;

    /**
     * @var null|GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResultRating;
     */
    public $rating = null;

    /**
     * @var array|GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResultRating_groups[];
     */
    public $rating_groups = [];

    /**
     * @var array|GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResultTop_keywords[];
     */
    public $top_keywords = [];

    /**
     * @var null|integer;
     */
    public $reviews_count = null;

    /**
     * @var null|array;
     */
    public $item_types = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|GoogleReviewsGetAdvancedResultsByIdEntityMainTasksResultItems[];
     */
    public $items = [];
}
