<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SubdomainsLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\SubdomainsLiveEntityMainTasksResultItemsMetricsPaid;

#[\AllowDynamicProperties]
class SubdomainsLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|SubdomainsLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|SubdomainsLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;
 
}