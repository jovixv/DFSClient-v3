<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AppleAppListGetAdvancedResultsByIdEntityMainTasksResultItemsPrice;
use DFSClientV3\Entity\Custom\AppleAppListGetAdvancedResultsByIdEntityMainTasksResultItemsRating;

class AppleAppListGetAdvancedResultsByIdEntityMainTasksResultItems
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
    public $app_id = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|string;
     */
    public $url = null;

    /**
     * @var null|string;
     */
    public $icon = null;

    /**
     * @var null|integer;
     */
    public $reviews_count = null;

    /**
     * @var null|AppleAppListGetAdvancedResultsByIdEntityMainTasksResultItemsRating;
     */
    public $rating = null;

    /**
     * @var null|boolean;
     */
    public $is_free = null;

    /**
     * @var null|AppleAppListGetAdvancedResultsByIdEntityMainTasksResultItemsPrice;
     */
    public $price = null;
}
