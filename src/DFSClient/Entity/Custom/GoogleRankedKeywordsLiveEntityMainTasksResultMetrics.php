<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetricsOrganic;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetricsPaid;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetricsLocal_pack;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetricsAi_overview_reference;

#[\AllowDynamicProperties]
class GoogleRankedKeywordsLiveEntityMainTasksResultMetrics 
{    
    /**
    * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetricsPaid $paid;
    */
    public $paid = null;

    /**
    * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetricsFeatured_snippet $featured_snippet;
    */
    public $featured_snippet = null;

    /**
    * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetricsLocal_pack $local_pack;
    */
    public $local_pack = null;

    /**
    * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetricsAi_overview_reference $ai_overview_reference;
    */
    public $ai_overview_reference = null;
 
}