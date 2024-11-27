<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\CompetitorsDomainLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\CompetitorsDomainLiveEntityMainTasksResultItemsMetricsPaid;

#[\AllowDynamicProperties]
class CompetitorsDomainLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|CompetitorsDomainLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|CompetitorsDomainLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;
 
}