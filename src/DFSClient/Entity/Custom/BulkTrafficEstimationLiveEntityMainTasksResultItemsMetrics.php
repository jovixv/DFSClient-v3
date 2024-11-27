<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid;
use DFSClientV3\Entity\Custom\BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet;

#[\AllowDynamicProperties]
class BulkTrafficEstimationLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;

    /**
    * @var null|BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack $local_pack;
    */
    public $local_pack = null;

    /**
    * @var null|BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet $featured_snippet;
    */
    public $featured_snippet = null;
 
}