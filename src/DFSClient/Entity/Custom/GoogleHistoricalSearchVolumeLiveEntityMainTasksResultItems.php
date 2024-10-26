<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsAvg_backlinks_info;
use DFSClientV3\Entity\Custom\GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsClickstream_keyword_info;
use DFSClientV3\Entity\Custom\GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsImpressions_info;
use DFSClientV3\Entity\Custom\GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsKeyword_info;
use DFSClientV3\Entity\Custom\GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsKeyword_info_normalized_with_bing;
use DFSClientV3\Entity\Custom\GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsKeyword_info_normalized_with_clickstream;
use DFSClientV3\Entity\Custom\GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsKeyword_properties;
use DFSClientV3\Entity\Custom\GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsSerp_info;

class GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItems
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
     * @var null|boolean;
     */
    public $search_partners = null;

    /**
     * @var null|GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsKeyword_info_normalized_with_bing;
     */
    public $keyword_info_normalized_with_bing = null;

    /**
     * @var null|GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsKeyword_info_normalized_with_clickstream;
     */
    public $keyword_info_normalized_with_clickstream = null;

    /**
     * @var null|GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsClickstream_keyword_info;
     */
    public $clickstream_keyword_info = null;

    /**
     * @var null|GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsKeyword_properties;
     */
    public $keyword_properties = null;

    /**
     * @var null|GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsImpressions_info;
     */
    public $impressions_info = null;

    /**
     * @var null|GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsSerp_info;
     */
    public $serp_info = null;

    /**
     * @var null|GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsAvg_backlinks_info;
     */
    public $avg_backlinks_info = null;
}
