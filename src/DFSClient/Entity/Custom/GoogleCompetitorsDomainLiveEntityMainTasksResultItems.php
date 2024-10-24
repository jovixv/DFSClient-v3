<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metrics;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metrics;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsMetrics;

class GoogleCompetitorsDomainLiveEntityMainTasksResultItems
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
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metrics;
     */
    public $full_domain_metrics = null;

    /**
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsMetrics;
     */
    public $metrics = null;

    /**
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metrics;
     */
    public $competitor_metrics = null;
}
