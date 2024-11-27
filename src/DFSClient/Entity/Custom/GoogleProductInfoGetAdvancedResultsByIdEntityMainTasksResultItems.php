<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellers;
use DFSClientV3\Entity\Custom\GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsVariations;

#[\AllowDynamicProperties]
class GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItems 
{    
    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|integer $rank_group;
    */
    public $rank_group = null;

    /**
    * @var null|integer $rank_absolute;
    */
    public $rank_absolute = null;

    /**
    * @var null|string $position;
    */
    public $position = null;

    /**
    * @var null|string $product_id;
    */
    public $product_id = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|string $description;
    */
    public $description = null;

    /**
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var null|array $images;
    */
    public $images = null;

    /**
    * @var null|array $features;
    */
    public $features = null;

    /**
    * @var null|GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsRating $rating;
    */
    public $rating = null;

    /**
    * @var null|integer $seller_reviews_count;
    */
    public $seller_reviews_count = null;

    /**
    * @var array|GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellers[] $sellers;
    */
    public $sellers = [];

    /**
    * @var array|GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsVariations[] $variations;
    */
    public $variations = [];
 
}