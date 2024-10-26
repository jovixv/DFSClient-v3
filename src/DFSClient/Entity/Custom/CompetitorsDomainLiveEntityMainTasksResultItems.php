<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\CompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metrics;
use DFSClientV3\Entity\Custom\CompetitorsDomainLiveEntityMainTasksResultItemsMetrics;

class CompetitorsDomainLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $domain = null;

    /**
     * @var null|double;
     */
    public $avg_position = null;

    /**
     * @var null|integer;
     */
    public $sum_position = null;

    /**
     * @var null|integer;
     */
    public $intersections = null;

    /**
     * @var null|CompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metrics;
     */
    public $full_domain_metrics = null;

    /**
     * @var null|CompetitorsDomainLiveEntityMainTasksResultItemsMetrics;
     */
    public $metrics = null;
}
