<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class GoogleKeywordsForSiteLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|string $target;
    */
    public $target = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var null|integer $offset;
    */
    public $offset = null;

    /**
    * @var null|string $offset_token;
    */
    public $offset_token = null;

    /**
    * @var array|GoogleKeywordsForSiteLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}