<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_info;
use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_properties;
use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsImpressions_info;
use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsSerp_info;
use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsAvg_backlinks_info;

class GoogleKeywordIdeasLiveEntityMainTasksResultItems 
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
    * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_info $keyword_info;
    */
    public $keyword_info = null;

    /**
    * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_properties $keyword_properties;
    */
    public $keyword_properties = null;

    /**
    * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsImpressions_info $impressions_info;
    */
    public $impressions_info = null;

    /**
    * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsSerp_info $serp_info;
    */
    public $serp_info = null;

    /**
    * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsAvg_backlinks_info $avg_backlinks_info;
    */
    public $avg_backlinks_info = null;
 
}