<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsSearchLiveEntityMainTasksResultItemsSources;
use DFSClientV3\Entity\Custom\LlmMentionsSearchLiveEntityMainTasksResultItemsMonthly_searches;

#[\AllowDynamicProperties]
class LlmMentionsSearchLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $platform;
    */
    public $platform = null;

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
    * @var null|NULL $search_results;
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
 
}