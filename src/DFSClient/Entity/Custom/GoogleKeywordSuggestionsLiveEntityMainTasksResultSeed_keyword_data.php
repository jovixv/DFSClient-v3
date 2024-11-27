<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataKeyword_info;
use DFSClientV3\Entity\Custom\GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataKeyword_info_normalized_with_bing;
use DFSClientV3\Entity\Custom\GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataKeyword_info_normalized_with_clickstream;
use DFSClientV3\Entity\Custom\GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataClickstream_keyword_info;
use DFSClientV3\Entity\Custom\GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataImpressions_info;
use DFSClientV3\Entity\Custom\GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataSerp_info;
use DFSClientV3\Entity\Custom\GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataKeyword_properties;
use DFSClientV3\Entity\Custom\GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataSearch_intent_info;
use DFSClientV3\Entity\Custom\GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataAvg_backlinks_info;

#[\AllowDynamicProperties]
class GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_data 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

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
    * @var null|GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataKeyword_info $keyword_info;
    */
    public $keyword_info = null;

    /**
    * @var null|GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataKeyword_info_normalized_with_bing $keyword_info_normalized_with_bing;
    */
    public $keyword_info_normalized_with_bing = null;

    /**
    * @var null|GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataKeyword_info_normalized_with_clickstream $keyword_info_normalized_with_clickstream;
    */
    public $keyword_info_normalized_with_clickstream = null;

    /**
    * @var null|GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataClickstream_keyword_info $clickstream_keyword_info;
    */
    public $clickstream_keyword_info = null;

    /**
    * @var null|GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataImpressions_info $impressions_info;
    */
    public $impressions_info = null;

    /**
    * @var null|GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataSerp_info $serp_info;
    */
    public $serp_info = null;

    /**
    * @var null|GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataKeyword_properties $keyword_properties;
    */
    public $keyword_properties = null;

    /**
    * @var null|GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataSearch_intent_info $search_intent_info;
    */
    public $search_intent_info = null;

    /**
    * @var null|GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_dataAvg_backlinks_info $avg_backlinks_info;
    */
    public $avg_backlinks_info = null;
 
}