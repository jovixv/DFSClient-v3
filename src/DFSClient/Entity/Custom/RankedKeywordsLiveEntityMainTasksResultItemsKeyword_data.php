<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\RankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataImpressions_info;
use DFSClientV3\Entity\Custom\RankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;

class RankedKeywordsLiveEntityMainTasksResultItemsKeyword_data
{
    /**
     * @var null|string;
     */
    public $keyword = null;

    /**
     * @var null|integer;
     */
    public $location = null;

    /**
     * @var null|string;
     */
    public $language = null;

    /**
     * @var null|RankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|RankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataImpressions_info;
     */
    public $impressions_info = null;
}
