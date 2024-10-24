<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetricsLocal_pack;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetricsOrganic;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetricsPaid;

class GoogleRankedKeywordsLiveEntityMainTasksResultMetrics
{
    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetricsPaid;
     */
    public $paid = null;

    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetricsFeatured_snippet;
     */
    public $featured_snippet = null;

    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetricsLocal_pack;
     */
    public $local_pack = null;
}
