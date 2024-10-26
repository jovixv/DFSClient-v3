<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid;

class BulkTrafficEstimationLiveEntityMainTasksResultItemsMetrics
{
    /**
     * @var null|BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid;
     */
    public $paid = null;

    /**
     * @var null|BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack;
     */
    public $local_pack = null;

    /**
     * @var null|BulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
     */
    public $featured_snippet = null;
}
