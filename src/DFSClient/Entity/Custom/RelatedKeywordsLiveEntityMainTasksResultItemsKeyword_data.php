<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\RelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataImpressions_info;
use DFSClientV3\Entity\Custom\RelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;

class RelatedKeywordsLiveEntityMainTasksResultItemsKeyword_data
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
     * @var null|RelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|RelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataImpressions_info;
     */
    public $impressions_info = null;
}
