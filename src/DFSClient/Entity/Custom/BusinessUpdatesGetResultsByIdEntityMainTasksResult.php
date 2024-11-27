<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class BusinessUpdatesGetResultsByIdEntityMainTasksResult 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

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
    * @var null|string $business_updates_id;
    */
    public $business_updates_id = null;

    /**
    * @var null|string $cid;
    */
    public $cid = null;

    /**
    * @var null|string $feature_id;
    */
    public $feature_id = null;

    /**
    * @var null|array $item_types;
    */
    public $item_types = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * array|BusinessUpdatesGetResultsByIdEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}