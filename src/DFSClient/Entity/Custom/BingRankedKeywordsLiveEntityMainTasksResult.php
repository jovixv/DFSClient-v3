<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetrics;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetrics_absolute;

class BingRankedKeywordsLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $se_type = null;

    /**
     * @var null|string;
     */
    public $target = null;

    /**
     * @var null|integer;
     */
    public $location_code = null;

    /**
     * @var null|string;
     */
    public $language_code = null;

    /**
     * @var null|integer;
     */
    public $total_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetrics;
     */
    public $metrics = null;

    /**
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetrics_absolute;
     */
    public $metrics_absolute = null;

    /**
     * @var array|BingRankedKeywordsLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
