<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingDomainRankOverviewLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\BingDomainRankOverviewLiveEntityMainTasksResultItemsMetricsPaid;

#[\AllowDynamicProperties]
class BingDomainRankOverviewLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|BingDomainRankOverviewLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|BingDomainRankOverviewLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;
 
}