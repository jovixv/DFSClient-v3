<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetrics;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absolute;

#[\AllowDynamicProperties]
class GoogleRankedKeywordsLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|string $target;
    */
    public $target = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetrics $metrics;
    */
    public $metrics = null;

    /**
    * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absolute $metrics_absolute;
    */
    public $metrics_absolute = null;

    /**
    * @var array|GoogleRankedKeywordsLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}