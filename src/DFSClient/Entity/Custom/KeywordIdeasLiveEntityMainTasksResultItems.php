<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordIdeasLiveEntityMainTasksResultItemsImpressions_info;
use DFSClientV3\Entity\Custom\KeywordIdeasLiveEntityMainTasksResultItemsKeyword_info;

class KeywordIdeasLiveEntityMainTasksResultItems
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
     * @var null|KeywordIdeasLiveEntityMainTasksResultItemsKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|KeywordIdeasLiveEntityMainTasksResultItemsImpressions_info;
     */
    public $impressions_info = null;
}
