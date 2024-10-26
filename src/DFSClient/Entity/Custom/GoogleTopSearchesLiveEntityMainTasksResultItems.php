<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleTopSearchesLiveEntityMainTasksResultItemsAvg_backlinks_info;
use DFSClientV3\Entity\Custom\GoogleTopSearchesLiveEntityMainTasksResultItemsClickstream_keyword_info;
use DFSClientV3\Entity\Custom\GoogleTopSearchesLiveEntityMainTasksResultItemsImpressions_info;
use DFSClientV3\Entity\Custom\GoogleTopSearchesLiveEntityMainTasksResultItemsKeyword_info;
use DFSClientV3\Entity\Custom\GoogleTopSearchesLiveEntityMainTasksResultItemsKeyword_info_normalized_with_bing;
use DFSClientV3\Entity\Custom\GoogleTopSearchesLiveEntityMainTasksResultItemsKeyword_info_normalized_with_clickstream;
use DFSClientV3\Entity\Custom\GoogleTopSearchesLiveEntityMainTasksResultItemsKeyword_properties;
use DFSClientV3\Entity\Custom\GoogleTopSearchesLiveEntityMainTasksResultItemsSearch_intent_info;
use DFSClientV3\Entity\Custom\GoogleTopSearchesLiveEntityMainTasksResultItemsSerp_info;

class GoogleTopSearchesLiveEntityMainTasksResultItems
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
     * @var null|GoogleTopSearchesLiveEntityMainTasksResultItemsKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|GoogleTopSearchesLiveEntityMainTasksResultItemsKeyword_info_normalized_with_bing;
     */
    public $keyword_info_normalized_with_bing = null;

    /**
     * @var null|GoogleTopSearchesLiveEntityMainTasksResultItemsKeyword_info_normalized_with_clickstream;
     */
    public $keyword_info_normalized_with_clickstream = null;

    /**
     * @var null|GoogleTopSearchesLiveEntityMainTasksResultItemsClickstream_keyword_info;
     */
    public $clickstream_keyword_info = null;

    /**
     * @var null|GoogleTopSearchesLiveEntityMainTasksResultItemsKeyword_properties;
     */
    public $keyword_properties = null;

    /**
     * @var null|GoogleTopSearchesLiveEntityMainTasksResultItemsImpressions_info;
     */
    public $impressions_info = null;

    /**
     * @var null|GoogleTopSearchesLiveEntityMainTasksResultItemsSerp_info;
     */
    public $serp_info = null;

    /**
     * @var null|GoogleTopSearchesLiveEntityMainTasksResultItemsAvg_backlinks_info;
     */
    public $avg_backlinks_info = null;

    /**
     * @var null|GoogleTopSearchesLiveEntityMainTasksResultItemsSearch_intent_info;
     */
    public $search_intent_info = null;
}
