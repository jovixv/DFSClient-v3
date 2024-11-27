<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRelevantPagesLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\BingRelevantPagesLiveEntityMainTasksResultItemsMetricsPaid;
use DFSClientV3\Entity\Custom\BingRelevantPagesLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\BingRelevantPagesLiveEntityMainTasksResultItemsMetricsLocal_pack;

#[\AllowDynamicProperties]
class BingRelevantPagesLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|BingRelevantPagesLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|BingRelevantPagesLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;

    /**
    * @var null|BingRelevantPagesLiveEntityMainTasksResultItemsMetricsFeatured_snippet $featured_snippet;
    */
    public $featured_snippet = null;

    /**
    * @var null|BingRelevantPagesLiveEntityMainTasksResultItemsMetricsLocal_pack $local_pack;
    */
    public $local_pack = null;
 
}