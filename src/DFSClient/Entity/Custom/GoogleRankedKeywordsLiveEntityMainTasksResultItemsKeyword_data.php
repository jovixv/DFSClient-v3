<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataAvg_backlinks_info;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataClickstream_keyword_info;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataImpressions_info;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info_normalized_with_bing;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info_normalized_with_clickstream;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_properties;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSearch_intent_info;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSerp_info;

class GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_data
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
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info_normalized_with_bing;
     */
    public $keyword_info_normalized_with_bing = null;

    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info_normalized_with_clickstream;
     */
    public $keyword_info_normalized_with_clickstream = null;

    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataClickstream_keyword_info;
     */
    public $clickstream_keyword_info = null;

    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_properties;
     */
    public $keyword_properties = null;

    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataImpressions_info;
     */
    public $impressions_info = null;

    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSerp_info;
     */
    public $serp_info = null;

    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataAvg_backlinks_info;
     */
    public $avg_backlinks_info = null;

    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSearch_intent_info;
     */
    public $search_intent_info = null;
}
