<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\RelevantPagesLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\RelevantPagesLiveEntityMainTasksResultItemsMetricsPaid;

#[\AllowDynamicProperties]
class RelevantPagesLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|RelevantPagesLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|RelevantPagesLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;
 
}