<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid;
use DFSClientV3\Entity\Custom\GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet;

class GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var array|GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsOrganic[] $organic;
    */
    public $organic = [];

    /**
    * @var array|GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsPaid[] $paid;
    */
    public $paid = [];

    /**
    * @var array|GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsLocal_pack[] $local_pack;
    */
    public $local_pack = [];

    /**
    * @var array|GoogleHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItemsMetricsFeatured_snippet[] $featured_snippet;
    */
    public $featured_snippet = [];
 
}