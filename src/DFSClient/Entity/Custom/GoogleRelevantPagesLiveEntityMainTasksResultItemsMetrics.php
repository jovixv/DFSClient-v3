<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsPaid;
use DFSClientV3\Entity\Custom\GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsLocal_pack;

class GoogleRelevantPagesLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;

    /**
    * @var null|GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsFeatured_snippet $featured_snippet;
    */
    public $featured_snippet = null;

    /**
    * @var null|GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsLocal_pack $local_pack;
    */
    public $local_pack = null;
 
}