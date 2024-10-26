<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSerp_info;

class BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_data
{
    /**
     * @var null|string;
     */
    public $se_type = null;

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
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSerp_info;
     */
    public $serp_info = null;

    /**
     * @var null|null;
     */
    public $avg_backlinks_info = null;
}
