<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordSuggestionsLiveEntityMainTasksResultItemsImpressions_info;
use DFSClientV3\Entity\Custom\KeywordSuggestionsLiveEntityMainTasksResultItemsKeyword_info;

class KeywordSuggestionsLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $keyword = null;

    /**
     * @var null|integer;
     */
    public $location_code = null;

    /**
     * @var null|string;
     */
    public $language_code = null;

    /**
     * @var null|KeywordSuggestionsLiveEntityMainTasksResultItemsKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|KeywordSuggestionsLiveEntityMainTasksResultItemsImpressions_info;
     */
    public $impressions_info = null;
}
