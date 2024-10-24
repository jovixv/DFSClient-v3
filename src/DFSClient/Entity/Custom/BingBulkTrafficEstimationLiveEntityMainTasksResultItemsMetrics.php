<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid;

class BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetrics
{
    /**
     * @var null|BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid;
     */
    public $paid = null;

    /**
     * @var null|BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack;
     */
    public $local_pack = null;

    /**
     * @var null|BingBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
     */
    public $featured_snippet = null;
}
