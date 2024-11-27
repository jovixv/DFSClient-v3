<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleDomainWhoisOverviewLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\GoogleDomainWhoisOverviewLiveEntityMainTasksResultItemsMetricsPaid;

#[\AllowDynamicProperties]
class GoogleDomainWhoisOverviewLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|GoogleDomainWhoisOverviewLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|GoogleDomainWhoisOverviewLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;
 
}