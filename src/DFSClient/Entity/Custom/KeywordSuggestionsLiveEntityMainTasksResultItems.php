<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordSuggestionsLiveEntityMainTasksResultItemsKeyword_info;
use DFSClientV3\Entity\Custom\KeywordSuggestionsLiveEntityMainTasksResultItemsImpressions_info;

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
    * @var null|KeywordSuggestionsLiveEntityMainTasksResultItemsImpressions_info $impressions_info;
    */
    public $impressions_info = null;
 
}