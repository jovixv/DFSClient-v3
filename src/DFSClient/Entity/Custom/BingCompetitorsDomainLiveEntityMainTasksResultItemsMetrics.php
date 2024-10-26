<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsPaid;

class BingCompetitorsDomainLiveEntityMainTasksResultItemsMetrics
{
    /**
     * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsPaid;
     */
    public $paid = null;

    /**
     * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsLocal_pack;
     */
    public $local_pack = null;

    /**
     * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
     */
    public $featured_snippet = null;
}
