<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid;

class BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetrics
{
    /**
     * @var array|BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic[];
     */
    public $organic = [];

    /**
     * @var array|BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid[];
     */
    public $paid = [];

    /**
     * @var array|BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack[];
     */
    public $local_pack = [];

    /**
     * @var array|BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet[];
     */
    public $featured_snippet = [];
}
