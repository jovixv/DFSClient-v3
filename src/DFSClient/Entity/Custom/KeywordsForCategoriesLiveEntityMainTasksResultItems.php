<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordsForCategoriesLiveEntityMainTasksResultItemsImpressions_info;
use DFSClientV3\Entity\Custom\KeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_info;

class KeywordsForCategoriesLiveEntityMainTasksResultItems
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
     * @var null|KeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|KeywordsForCategoriesLiveEntityMainTasksResultItemsImpressions_info;
     */
    public $impressions_info = null;
}
