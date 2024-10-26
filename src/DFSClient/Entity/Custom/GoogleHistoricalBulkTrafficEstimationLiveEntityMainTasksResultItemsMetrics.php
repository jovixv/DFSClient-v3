<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid;

class GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetrics
{
    /**
     * @var array|GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic[];
     */
    public $organic = [];

    /**
     * @var array|GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid[];
     */
    public $paid = [];

    /**
     * @var array|GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack[];
     */
    public $local_pack = [];

    /**
     * @var array|GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet[];
     */
    public $featured_snippet = [];
}
