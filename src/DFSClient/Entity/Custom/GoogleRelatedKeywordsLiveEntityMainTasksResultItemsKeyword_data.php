<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataAvg_backlinks_info;
use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataClickstream_keyword_info;
use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataImpressions_info;
use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;
use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info_normalized_with_bing;
use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info_normalized_with_clickstream;
use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_properties;
use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSearch_intent_info;
use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSerp_info;

class GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_data
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
     * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info_normalized_with_bing;
     */
    public $keyword_info_normalized_with_bing = null;

    /**
     * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info_normalized_with_clickstream;
     */
    public $keyword_info_normalized_with_clickstream = null;

    /**
     * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataClickstream_keyword_info;
     */
    public $clickstream_keyword_info = null;

    /**
     * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_properties;
     */
    public $keyword_properties = null;

    /**
     * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataImpressions_info;
     */
    public $impressions_info = null;

    /**
     * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSerp_info;
     */
    public $serp_info = null;

    /**
     * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataAvg_backlinks_info;
     */
    public $avg_backlinks_info = null;

    /**
     * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSearch_intent_info;
     */
    public $search_intent_info = null;
}
