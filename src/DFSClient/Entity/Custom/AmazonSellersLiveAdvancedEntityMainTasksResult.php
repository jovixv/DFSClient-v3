<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class AmazonSellersLiveAdvancedEntityMainTasksResult 
{    
    /**
    * @var null|string $asin;
    */
    public $asin = null;

    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|string $se_domain;
    */
    public $se_domain = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|string $check_url;
    */
    public $check_url = null;

    /**
    * @var null|string $datetime;
    */
    public $datetime = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|string $image;
    */
    public $image = null;

    /**
    * @var null|array $item_types;
    */
    public $item_types = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|AmazonSellersLiveAdvancedEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}