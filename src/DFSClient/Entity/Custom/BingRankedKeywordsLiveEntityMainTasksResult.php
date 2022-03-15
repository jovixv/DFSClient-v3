<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetrics;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetrics_absolute;

class BingRankedKeywordsLiveEntityMainTasksResult 
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
    * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetrics $metrics;
    */
    public $metrics = null;

    /**
    * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetrics_absolute $metrics_absolute;
    */
    public $metrics_absolute = null;

    /**
    * @var array|BingRankedKeywordsLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}