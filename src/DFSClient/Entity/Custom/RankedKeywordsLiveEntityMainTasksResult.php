<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\RankedKeywordsLiveEntityMainTasksResultMetrics;

class RankedKeywordsLiveEntityMainTasksResult 
{    
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
    * @var null|RankedKeywordsLiveEntityMainTasksResultMetrics $metrics;
    */
    public $metrics = null;

    /**
    * array|RankedKeywordsLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}