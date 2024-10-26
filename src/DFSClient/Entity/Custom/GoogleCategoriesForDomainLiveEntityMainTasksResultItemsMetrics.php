<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsLocal_pack;
use DFSClientV3\Entity\Custom\GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsPaid;

class GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetrics
{
    /**
     * @var null|GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsPaid;
     */
    public $paid = null;

    /**
     * @var null|GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
     */
    public $featured_snippet = null;

    /**
     * @var null|GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsLocal_pack;
     */
    public $local_pack = null;
}
