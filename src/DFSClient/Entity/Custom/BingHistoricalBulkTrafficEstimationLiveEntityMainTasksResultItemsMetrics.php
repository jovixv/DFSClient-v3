<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid;
use DFSClientV3\Entity\Custom\BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet;

class BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var array|BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic[] $organic;
    */
    public $organic = [];

    /**
    * @var array|BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid[] $paid;
    */
    public $paid = [];

    /**
    * @var array|BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack[] $local_pack;
    */
    public $local_pack = [];

    /**
    * @var array|BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet[] $featured_snippet;
    */
    public $featured_snippet = [];
 
}