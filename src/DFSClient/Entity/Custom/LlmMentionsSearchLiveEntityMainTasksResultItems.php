<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsSearchLiveEntityMainTasksResultItemsSources;
use DFSClientV3\Entity\Custom\LlmMentionsSearchLiveEntityMainTasksResultItemsSearch_results;
use DFSClientV3\Entity\Custom\LlmMentionsSearchLiveEntityMainTasksResultItemsMonthly_searches;
use DFSClientV3\Entity\Custom\LlmMentionsSearchLiveEntityMainTasksResultItemsBrand_entities;

#[\AllowDynamicProperties]
class LlmMentionsSearchLiveEntityMainTasksResultItems 
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
    * @var array|LlmMentionsSearchLiveEntityMainTasksResultItemsSources[] $sources;
    */
    public $sources = [];

    /**
    * @var null|LlmMentionsSearchLiveEntityMainTasksResultItemsSearch_results[] $search_results;
    */
    public $search_results = null;

    /**
    * @var null|integer $ai_search_volume;
    */
    public $ai_search_volume = null;

    /**
    * @var array|LlmMentionsSearchLiveEntityMainTasksResultItemsMonthly_searches[] $monthly_searches;
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
    * @var null|LlmMentionsSearchLiveEntityMainTasksResultItemsBrand_entities[] $brand_entities;
    */
    public $brand_entities = null;

    /**
    * @var null|array $fan_out_queries;
    */
    public $fan_out_queries = null;
 
}
