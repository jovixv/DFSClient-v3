<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleKeywordOverviewLiveEntityMainTasksResultItemsKeyword_info;
use DFSClientV3\Entity\Custom\GoogleKeywordOverviewLiveEntityMainTasksResultItemsKeyword_properties;
use DFSClientV3\Entity\Custom\GoogleKeywordOverviewLiveEntityMainTasksResultItemsSerp_info;
use DFSClientV3\Entity\Custom\GoogleKeywordOverviewLiveEntityMainTasksResultItemsAvg_backlinks_info;

#[\AllowDynamicProperties]
class GoogleKeywordOverviewLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|boolean $search_partners;
    */
    public $search_partners = null;

    /**
    * @var null|GoogleKeywordOverviewLiveEntityMainTasksResultItemsKeyword_info $keyword_info;
    */
    public $keyword_info = null;

    /**
    * @var null|NULL $keyword_info_normalized_with_bing;
    */
    public $keyword_info_normalized_with_bing = null;

    /**
    * @var null|NULL $keyword_info_normalized_with_clickstream;
    */
    public $keyword_info_normalized_with_clickstream = null;

    /**
    * @var null|NULL $clickstream_keyword_info;
    */
    public $clickstream_keyword_info = null;

    /**
    * @var null|GoogleKeywordOverviewLiveEntityMainTasksResultItemsKeyword_properties $keyword_properties;
    */
    public $keyword_properties = null;

    /**
    * @var null|GoogleKeywordOverviewLiveEntityMainTasksResultItemsSerp_info $serp_info;
    */
    public $serp_info = null;

    /**
    * @var null|GoogleKeywordOverviewLiveEntityMainTasksResultItemsAvg_backlinks_info $avg_backlinks_info;
    */
    public $avg_backlinks_info = null;
 
}
