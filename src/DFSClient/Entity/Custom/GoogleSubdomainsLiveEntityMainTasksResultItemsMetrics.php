<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsPaid;
use DFSClientV3\Entity\Custom\GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsLocal_pack;

#[\AllowDynamicProperties]
class GoogleSubdomainsLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;

    /**
    * @var null|GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsFeatured_snippet $featured_snippet;
    */
    public $featured_snippet = null;

    /**
    * @var null|GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsLocal_pack $local_pack;
    */
    public $local_pack = null;
 
}