<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differenceFeatured_snippet;
use DFSClientV3\Entity\Custom\DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differenceLocal_pack;
use DFSClientV3\Entity\Custom\DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differenceOrganic;
use DFSClientV3\Entity\Custom\DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differencePaid;

class DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_difference
{
    /**
     * @var null|DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differenceOrganic;
     */
    public $organic = null;

    /**
     * @var null|DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differencePaid;
     */
    public $paid = null;

    /**
     * @var null|DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differenceFeatured_snippet;
     */
    public $featured_snippet = null;

    /**
     * @var null|DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differenceLocal_pack;
     */
    public $local_pack = null;
}
