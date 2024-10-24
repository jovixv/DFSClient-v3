<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsPaid;

class GoogleRelevantPagesLiveEntityMainTasksResultItemsMetrics
{
    /**
     * @var null|GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsPaid;
     */
    public $paid = null;

    /**
     * @var null|GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
     */
    public $featured_snippet = null;

    /**
     * @var null|GoogleRelevantPagesLiveEntityMainTasksResultItemsMetricsLocal_pack;
     */
    public $local_pack = null;
}
