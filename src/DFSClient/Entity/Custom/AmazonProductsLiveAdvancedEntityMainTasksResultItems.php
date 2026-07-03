<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AmazonProductsLiveAdvancedEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\AmazonProductsLiveAdvancedEntityMainTasksResultItemsDelivery_info;

#[\AllowDynamicProperties]
class AmazonProductsLiveAdvancedEntityMainTasksResultItems 
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
    * @var null|string $xpath;
    */
    public $xpath = null;

    /**
    * @var null|string $domain;
    */
    public $domain = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var null|string $image_url;
    */
    public $image_url = null;

    /**
    * @var null|integer $bought_past_month;
    */
    public $bought_past_month = null;

    /**
    * @var null|double $price_from;
    */
    public $price_from = null;

    /**
    * @var null|NULL $price_to;
    */
    public $price_to = null;

    /**
    * @var null|string $currency;
    */
    public $currency = null;

    /**
    * @var null|NULL $special_offers;
    */
    public $special_offers = null;

    /**
    * @var null|string $data_asin;
    */
    public $data_asin = null;

    /**
    * @var null|AmazonProductsLiveAdvancedEntityMainTasksResultItemsRating $rating;
    */
    public $rating = null;

    /**
    * @var null|boolean $is_amazon_choice;
    */
    public $is_amazon_choice = null;

    /**
    * @var null|boolean $is_best_seller;
    */
    public $is_best_seller = null;

    /**
    * @var null|AmazonProductsLiveAdvancedEntityMainTasksResultItemsDelivery_info $delivery_info;
    */
    public $delivery_info = null;

    /**
    * @var null|NULL $labels;
    */
    public $labels = null;
 
}