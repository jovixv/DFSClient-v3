<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AmazonReviewsGetAdvancedResultsByIdEntityMainTasksResultImage;
use DFSClientV3\Entity\Custom\AmazonReviewsGetAdvancedResultsByIdEntityMainTasksResultRating;

class AmazonReviewsGetAdvancedResultsByIdEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $asin = null;

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
     * @var null|null;
     */
    public $spell = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|AmazonReviewsGetAdvancedResultsByIdEntityMainTasksResultImage;
     */
    public $image = null;

    /**
     * @var null|AmazonReviewsGetAdvancedResultsByIdEntityMainTasksResultRating;
     */
    public $rating = null;

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
     * @var array|AmazonReviewsGetAdvancedResultsByIdEntityMainTasksResultItems[];
     */
    public $items = [];
}
