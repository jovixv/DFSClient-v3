<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleHistoricalRankOverviewLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\GoogleHistoricalRankOverviewLiveEntityMainTasksResultItemsMetricsPaid;

#[\AllowDynamicProperties]
class GoogleHistoricalRankOverviewLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|GoogleHistoricalRankOverviewLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|GoogleHistoricalRankOverviewLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;
 
}