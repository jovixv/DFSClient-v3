<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsPaid;

class GoogleSubdomainsLiveEntityMainTasksResultItemsMetrics
{
    /**
     * @var null|GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsPaid;
     */
    public $paid = null;

    /**
     * @var null|GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
     */
    public $featured_snippet = null;

    /**
     * @var null|GoogleSubdomainsLiveEntityMainTasksResultItemsMetricsLocal_pack;
     */
    public $local_pack = null;
}
