<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metrics;
use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metrics;
use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsMetrics;

class BingCompetitorsDomainLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $se_type = null;

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
     * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metrics;
     */
    public $full_domain_metrics = null;

    /**
     * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsMetrics;
     */
    public $metrics = null;

    /**
     * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metrics;
     */
    public $competitor_metrics = null;
}
