<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingSubdomainsLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\BingSubdomainsLiveEntityMainTasksResultItemsMetricsPaid;
use DFSClientV3\Entity\Custom\BingSubdomainsLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\BingSubdomainsLiveEntityMainTasksResultItemsMetricsLocal_pack;

class BingSubdomainsLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|BingSubdomainsLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|BingSubdomainsLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;

    /**
    * @var null|BingSubdomainsLiveEntityMainTasksResultItemsMetricsFeatured_snippet $featured_snippet;
    */
    public $featured_snippet = null;

    /**
    * @var null|BingSubdomainsLiveEntityMainTasksResultItemsMetricsLocal_pack $local_pack;
    */
    public $local_pack = null;
 
}