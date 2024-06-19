<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleKeywordSuggestionsLiveEntityMainTasksResultItemsClickstream_keyword_infoGender_distribution;
use DFSClientV3\Entity\Custom\GoogleKeywordSuggestionsLiveEntityMainTasksResultItemsClickstream_keyword_infoAge_distribution;
use DFSClientV3\Entity\Custom\GoogleKeywordSuggestionsLiveEntityMainTasksResultItemsClickstream_keyword_infoMonthly_searches;

class GoogleKeywordSuggestionsLiveEntityMainTasksResultItemsClickstream_keyword_info 
{    
    /**
    * @var null|integer $search_volume;
    */
    public $search_volume = null;

    /**
    * @var null|string $last_updated_time;
    */
    public $last_updated_time = null;

    /**
    * @var null|GoogleKeywordSuggestionsLiveEntityMainTasksResultItemsClickstream_keyword_infoGender_distribution $gender_distribution;
    */
    public $gender_distribution = null;

    /**
    * @var null|GoogleKeywordSuggestionsLiveEntityMainTasksResultItemsClickstream_keyword_infoAge_distribution $age_distribution;
    */
    public $age_distribution = null;

    /**
    * @var array|GoogleKeywordSuggestionsLiveEntityMainTasksResultItemsClickstream_keyword_infoMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];
 
}