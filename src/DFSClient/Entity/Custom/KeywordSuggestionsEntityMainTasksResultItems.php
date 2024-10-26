<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordSuggestionsEntityMainTasksResultItemsKeyword_info;

class KeywordSuggestionsEntityMainTasksResultItems
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
     * @var null|KeywordSuggestionsEntityMainTasksResultItemsKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|KeywordSuggestionsEntityMainTasksResultItemsImpressions_info;
     */
    public $impressions_info = null;
}
