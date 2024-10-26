<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsAvg_backlinks_info;
use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsClickstream_keyword_info;
use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsImpressions_info;
use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_info;
use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_info_normalized_with_bing;
use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_info_normalized_with_clickstream;
use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_properties;
use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsSearch_intent_info;
use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsSerp_info;

class GoogleKeywordIdeasLiveEntityMainTasksResultItems
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
     * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_info_normalized_with_bing;
     */
    public $keyword_info_normalized_with_bing = null;

    /**
     * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_info_normalized_with_clickstream;
     */
    public $keyword_info_normalized_with_clickstream = null;

    /**
     * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsClickstream_keyword_info;
     */
    public $clickstream_keyword_info = null;

    /**
     * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_properties;
     */
    public $keyword_properties = null;

    /**
     * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsImpressions_info;
     */
    public $impressions_info = null;

    /**
     * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsSerp_info;
     */
    public $serp_info = null;

    /**
     * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsAvg_backlinks_info;
     */
    public $avg_backlinks_info = null;

    /**
     * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsSearch_intent_info;
     */
    public $search_intent_info = null;
}
