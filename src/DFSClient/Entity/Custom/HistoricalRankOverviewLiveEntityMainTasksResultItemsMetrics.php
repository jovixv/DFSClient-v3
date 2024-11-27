<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HistoricalRankOverviewLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\HistoricalRankOverviewLiveEntityMainTasksResultItemsMetricsPaid;

#[\AllowDynamicProperties]
class HistoricalRankOverviewLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|HistoricalRankOverviewLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|HistoricalRankOverviewLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;
 
}