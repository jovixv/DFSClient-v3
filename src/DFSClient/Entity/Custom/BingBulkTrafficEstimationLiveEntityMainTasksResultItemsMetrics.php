<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid;
use DFSClientV3\Entity\Custom\BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet;

#[\AllowDynamicProperties]
class BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;

    /**
    * @var null|BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack $local_pack;
    */
    public $local_pack = null;

    /**
    * @var null|BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet $featured_snippet;
    */
    public $featured_snippet = null;
 
}