<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\GoogleBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\GoogleBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid;

class GoogleBulkTrafficEstimationLiveEntityMainTasksResultItemsMetrics
{
    /**
     * @var null|GoogleBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|GoogleBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid;
     */
    public $paid = null;

    /**
     * @var null|GoogleBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack;
     */
    public $local_pack = null;

    /**
     * @var null|GoogleBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
     */
    public $featured_snippet = null;
}
