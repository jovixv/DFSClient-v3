<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsMetricsPaid;

class GoogleCompetitorsDomainLiveEntityMainTasksResultItemsMetrics
{
    /**
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsMetricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsMetricsPaid;
     */
    public $paid = null;

    /**
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsMetricsLocal_pack;
     */
    public $local_pack = null;

    /**
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
     */
    public $featured_snippet = null;
}
