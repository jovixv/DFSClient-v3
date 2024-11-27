<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\WhoisOverviewLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\WhoisOverviewLiveEntityMainTasksResultItemsMetricsPaid;

#[\AllowDynamicProperties]
class WhoisOverviewLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|WhoisOverviewLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|WhoisOverviewLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;
 
}