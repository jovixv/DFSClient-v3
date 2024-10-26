<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_difference;
use DFSClientV3\Entity\Custom\DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_history;

class DomainMetricsByCategoriesLiveEntityMainTasksResultItems
{
    /**
     * @var null|array;
     */
    public $top_categories = null;

    /**
     * @var null|double;
     */
    public $organic_etv = null;

    /**
     * @var null|integer;
     */
    public $organic_count = null;

    /**
     * @var null|integer;
     */
    public $organic_is_lost = null;

    /**
     * @var null|integer;
     */
    public $organic_is_new = null;

    /**
     * @var null|string;
     */
    public $domain = null;

    /**
     * @var null|string;
     */
    public $main_domain = null;

    /**
     * @var null|array;
     */
    public $metrics_history = null;

    /**
     * @var null|DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_difference;
     */
    public $metrics_difference = null;
}
