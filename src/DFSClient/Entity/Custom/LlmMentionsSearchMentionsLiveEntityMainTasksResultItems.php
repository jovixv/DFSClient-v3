<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsSearchMentionsLiveEntityMainTasksResultItemsSources;
use DFSClientV3\Entity\Custom\LlmMentionsSearchMentionsLiveEntityMainTasksResultItemsSearch_results;
use DFSClientV3\Entity\Custom\LlmMentionsSearchMentionsLiveEntityMainTasksResultItemsMonthly_searches;
use DFSClientV3\Entity\Custom\LlmMentionsSearchMentionsLiveEntityMainTasksResultItemsBrand_entities;

#[\AllowDynamicProperties]
class LlmMentionsSearchMentionsLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $platform;
    */
    public $platform = null;

    /**
    * @var null|string $model_name;
    */
    public $model_name = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|string $question;
    */
    public $question = null;

    /**
    * @var null|string $answer;
    */
    public $answer = null;

    /**
    * @var array|LlmMentionsSearchMentionsLiveEntityMainTasksResultItemsSources[] $sources;
    */
    public $sources = [];

    /**
    * @var array|LlmMentionsSearchMentionsLiveEntityMainTasksResultItemsSearch_results[] $search_results;
    */
    public $search_results = [];

    /**
    * @var null|integer $ai_search_volume;
    */
    public $ai_search_volume = null;

    /**
    * @var array|LlmMentionsSearchMentionsLiveEntityMainTasksResultItemsMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];

    /**
    * @var null|string $first_response_at;
    */
    public $first_response_at = null;

    /**
    * @var null|string $last_response_at;
    */
    public $last_response_at = null;

    /**
    * @var array|LlmMentionsSearchMentionsLiveEntityMainTasksResultItemsBrand_entities[] $brand_entities;
    */
    public $brand_entities = [];

    /**
    * @var null|array $fan_out_queries;
    */
    public $fan_out_queries = null;

    /**
    * @var null|boolean $is_web_search_based;
    */
    public $is_web_search_based = null;
 
}