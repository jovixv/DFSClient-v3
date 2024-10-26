<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellers;
use DFSClientV3\Entity\Custom\GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsVariations;

class GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItems
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
    public $product_id = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|string;
     */
    public $description = null;

    /**
     * @var null|string;
     */
    public $url = null;

    /**
     * @var null|array;
     */
    public $images = null;

    /**
     * @var null|array;
     */
    public $features = null;

    /**
     * @var null|GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsRating;
     */
    public $rating = null;

    /**
     * @var null|integer;
     */
    public $seller_reviews_count = null;

    /**
     * @var array|GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellers[];
     */
    public $sellers = [];

    /**
     * @var array|GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsVariations[];
     */
    public $variations = [];
}
