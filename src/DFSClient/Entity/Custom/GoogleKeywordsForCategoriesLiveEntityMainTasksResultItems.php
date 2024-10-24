<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsAvg_backlinks_info;
use DFSClientV3\Entity\Custom\GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsClickstream_keyword_info;
use DFSClientV3\Entity\Custom\GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsImpressions_info;
use DFSClientV3\Entity\Custom\GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_info;
use DFSClientV3\Entity\Custom\GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_info_normalized_with_bing;
use DFSClientV3\Entity\Custom\GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_info_normalized_with_clickstream;
use DFSClientV3\Entity\Custom\GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_properties;
use DFSClientV3\Entity\Custom\GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsSearch_intent_info;
use DFSClientV3\Entity\Custom\GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsSerp_info;

class GoogleKeywordsForCategoriesLiveEntityMainTasksResultItems
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
     * @var null|GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_info_normalized_with_bing;
     */
    public $keyword_info_normalized_with_bing = null;

    /**
     * @var null|GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_info_normalized_with_clickstream;
     */
    public $keyword_info_normalized_with_clickstream = null;

    /**
     * @var null|GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsClickstream_keyword_info;
     */
    public $clickstream_keyword_info = null;

    /**
     * @var null|GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_properties;
     */
    public $keyword_properties = null;

    /**
     * @var null|GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsImpressions_info;
     */
    public $impressions_info = null;

    /**
     * @var null|GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsSerp_info;
     */
    public $serp_info = null;

    /**
     * @var null|GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsAvg_backlinks_info;
     */
    public $avg_backlinks_info = null;

    /**
     * @var null|GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsSearch_intent_info;
     */
    public $search_intent_info = null;
}
