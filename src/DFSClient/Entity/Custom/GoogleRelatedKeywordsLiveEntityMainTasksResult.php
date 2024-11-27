<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResultSeed_keyword_data;

#[\AllowDynamicProperties]
class GoogleRelatedKeywordsLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|string $seed_keyword;
    */
    public $seed_keyword = null;

    /**
    * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultSeed_keyword_data $seed_keyword_data;
    */
    public $seed_keyword_data = null;

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
    * @var array|GoogleRelatedKeywordsLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}