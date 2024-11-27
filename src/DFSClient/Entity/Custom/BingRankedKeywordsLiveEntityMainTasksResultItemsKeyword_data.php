<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSerp_info;

#[\AllowDynamicProperties]
class BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_data 
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
    * @var null|BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info $keyword_info;
    */
    public $keyword_info = null;

    /**
    * @var null|BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSerp_info $serp_info;
    */
    public $serp_info = null;

    /**
    * @var null|NULL $avg_backlinks_info;
    */
    public $avg_backlinks_info = null;
 
}