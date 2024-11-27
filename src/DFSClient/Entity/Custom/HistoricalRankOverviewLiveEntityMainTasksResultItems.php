<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HistoricalRankOverviewLiveEntityMainTasksResultItemsMetrics;

#[\AllowDynamicProperties]
class HistoricalRankOverviewLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|integer $year;
    */
    public $year = null;

    /**
    * @var null|integer $month;
    */
    public $month = null;

    /**
    * @var null|HistoricalRankOverviewLiveEntityMainTasksResultItemsMetrics $metrics;
    */
    public $metrics = null;
 
}