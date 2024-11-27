<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_data;

#[\AllowDynamicProperties]
class GoogleKeywordSuggestionsLiveEntityMainTasksResult 
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
    * @var null|GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_data $seed_keyword_data;
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
    * @var null|integer $offset;
    */
    public $offset = null;

    /**
    * @var null|string $offset_token;
    */
    public $offset_token = null;

    /**
    * @var array|GoogleKeywordSuggestionsLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}