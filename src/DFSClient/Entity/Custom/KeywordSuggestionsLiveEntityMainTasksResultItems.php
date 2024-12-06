<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordSuggestionsLiveEntityMainTasksResultItemsKeyword_info;
use DFSClientV3\Entity\Custom\KeywordSuggestionsLiveEntityMainTasksResultItemsKeyword_properties;
use DFSClientV3\Entity\Custom\KeywordSuggestionsLiveEntityMainTasksResultItemsImpressions_info;
use DFSClientV3\Entity\Custom\KeywordSuggestionsLiveEntityMainTasksResultItemsSerp_info;
use DFSClientV3\Entity\Custom\KeywordSuggestionsLiveEntityMainTasksResultItemsAvg_backlinks_info;
use DFSClientV3\Entity\Custom\KeywordSuggestionsLiveEntityMainTasksResultItemsSearch_intent_info;

#[\AllowDynamicProperties]
class KeywordSuggestionsLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|KeywordSuggestionsLiveEntityMainTasksResultItemsKeyword_info $keyword_info;
    */
    public $keyword_info = null;

    /**
    * @var null|KeywordSuggestionsLiveEntityMainTasksResultItemsKeyword_properties $keyword_properties;
    */
    public $keyword_properties = null;

    /**
    * @var null|KeywordSuggestionsLiveEntityMainTasksResultItemsImpressions_info $impressions_info;
    */
    public $impressions_info = null;

    /**
    * @var null|KeywordSuggestionsLiveEntityMainTasksResultItemsSerp_info $serp_info;
    */
    public $serp_info = null;

    /**
    * @var null|KeywordSuggestionsLiveEntityMainTasksResultItemsAvg_backlinks_Info $avg_backlinks_info;
    */
    public $avg_backlinks_info = null;

    /**
    * @var null|KeywordSuggestionsLiveEntityMainTasksResultItemsSearch_intent_info $search_intent_info;
    */
    public $search_intent_info = null;
 
}
