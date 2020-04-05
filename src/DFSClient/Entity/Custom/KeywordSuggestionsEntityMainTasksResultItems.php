<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordSuggestionsEntityMainTasksResultItemsKeyword_info;

class KeywordSuggestionsEntityMainTasksResultItems 
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
    * @var null|KeywordSuggestionsEntityMainTasksResultItemsKeyword_info $keyword_info;
    */
    public $keyword_info = null;

    /**
    * @var null|KeywordSuggestionsEntityMainTasksResultItemsImpressions_info $impressions_info;
    */
    public $impressions_info = null;
 
}