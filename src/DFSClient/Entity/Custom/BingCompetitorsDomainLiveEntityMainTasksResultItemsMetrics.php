<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsPaid;
use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsFeatured_snippet;

#[\AllowDynamicProperties]
class BingCompetitorsDomainLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;

    /**
    * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsLocal_pack $local_pack;
    */
    public $local_pack = null;

    /**
    * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsFeatured_snippet $featured_snippet;
    */
    public $featured_snippet = null;
 
}