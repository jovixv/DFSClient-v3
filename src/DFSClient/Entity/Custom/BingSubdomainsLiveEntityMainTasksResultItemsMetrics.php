<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingSubdomainsLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\BingSubdomainsLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\BingSubdomainsLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\BingSubdomainsLiveEntityMainTasksResultItemsMetricsPaid;

class BingSubdomainsLiveEntityMainTasksResultItemsMetrics
{
    /**
     * @var null|BingSubdomainsLiveEntityMainTasksResultItemsMetricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|BingSubdomainsLiveEntityMainTasksResultItemsMetricsPaid;
     */
    public $paid = null;

    /**
     * @var null|BingSubdomainsLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
     */
    public $featured_snippet = null;

    /**
     * @var null|BingSubdomainsLiveEntityMainTasksResultItemsMetricsLocal_pack;
     */
    public $local_pack = null;
}
