<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsApplicable_vouchers;
use DFSClientV3\Entity\Custom\AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsNewer_model;
use DFSClientV3\Entity\Custom\AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsCategories;
use DFSClientV3\Entity\Custom\AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsProduct_information;
use DFSClientV3\Entity\Custom\AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsTop_local_reviews;
use DFSClientV3\Entity\Custom\AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsTop_global_reviews;

#[\AllowDynamicProperties]
class AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItems 
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
    * @var null|string $xpath;
    */
    public $xpath = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|string $details;
    */
    public $details = null;

    /**
    * @var null|string $image_url;
    */
    public $image_url = null;

    /**
    * @var null|string $author;
    */
    public $author = null;

    /**
    * @var null|string $data_asin;
    */
    public $data_asin = null;

    /**
    * @var null|string $parent_asin;
    */
    public $parent_asin = null;

    /**
    * @var null|array $product_asins;
    */
    public $product_asins = null;

    /**
    * @var null|double $price_from;
    */
    public $price_from = null;

    /**
    * @var null|double $price_to;
    */
    public $price_to = null;

    /**
    * @var null|string $currency;
    */
    public $currency = null;

    /**
    * @var null|boolean $is_amazon_choice;
    */
    public $is_amazon_choice = null;

    /**
    * @var null|AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsRating $rating;
    */
    public $rating = null;

    /**
    * @var null|boolean $is_newer_model_available;
    */
    public $is_newer_model_available = null;

    /**
    * @var array|AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsApplicable_vouchers[] $applicable_vouchers;
    */
    public $applicable_vouchers = [];

    /**
    * @var null|AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsNewer_model $newer_model;
    */
    public $newer_model = null;

    /**
    * @var array|AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsCategories[] $categories;
    */
    public $categories = [];

    /**
    * @var array|AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsProduct_information[] $product_information;
    */
    public $product_information = [];

    /**
    * @var null|array $product_images_list;
    */
    public $product_images_list = null;

    /**
    * @var null|array $product_videos_list;
    */
    public $product_videos_list = null;

    /**
    * @var null|string $description;
    */
    public $description = null;

    /**
    * @var null|boolean $is_available;
    */
    public $is_available = null;

    /**
    * @var array|AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsTop_local_reviews[] $top_local_reviews;
    */
    public $top_local_reviews = [];

    /**
    * @var array|AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsTop_global_reviews[] $top_global_reviews;
    */
    public $top_global_reviews = [];
 
}
