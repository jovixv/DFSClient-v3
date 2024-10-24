<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRelevantPagesLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\BingRelevantPagesLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\BingRelevantPagesLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\BingRelevantPagesLiveEntityMainTasksResultItemsMetricsPaid;

class BingRelevantPagesLiveEntityMainTasksResultItemsMetrics
{
    /**
     * @var null|BingRelevantPagesLiveEntityMainTasksResultItemsMetricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|BingRelevantPagesLiveEntityMainTasksResultItemsMetricsPaid;
     */
    public $paid = null;

    /**
     * @var null|BingRelevantPagesLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
     */
    public $featured_snippet = null;

    /**
     * @var null|BingRelevantPagesLiveEntityMainTasksResultItemsMetricsLocal_pack;
     */
    public $local_pack = null;
}
