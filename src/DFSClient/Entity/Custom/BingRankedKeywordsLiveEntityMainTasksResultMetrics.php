<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetricsOrganic;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetricsPaid;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetricsLocal_pack;

#[\AllowDynamicProperties]
class BingRankedKeywordsLiveEntityMainTasksResultMetrics 
{    
    /**
    * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetricsPaid $paid;
    */
    public $paid = null;

    /**
    * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetricsFeatured_snippet $featured_snippet;
    */
    public $featured_snippet = null;

    /**
    * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetricsLocal_pack $local_pack;
    */
    public $local_pack = null;
 
}