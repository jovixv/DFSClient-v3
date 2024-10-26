<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetricsLocal_pack;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetricsOrganic;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetricsPaid;

class BingRankedKeywordsLiveEntityMainTasksResultMetrics
{
    /**
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetricsPaid;
     */
    public $paid = null;

    /**
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetricsFeatured_snippet;
     */
    public $featured_snippet = null;

    /**
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetricsLocal_pack;
     */
    public $local_pack = null;
}
