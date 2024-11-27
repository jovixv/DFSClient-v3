<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metrics;
use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsMetrics;
use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metrics;

#[\AllowDynamicProperties]
class BingCompetitorsDomainLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|string $domain;
    */
    public $domain = null;

    /**
    * @var null|double $avg_position;
    */
    public $avg_position = null;

    /**
    * @var null|integer $sum_position;
    */
    public $sum_position = null;

    /**
    * @var null|integer $intersections;
    */
    public $intersections = null;

    /**
    * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metrics $full_domain_metrics;
    */
    public $full_domain_metrics = null;

    /**
    * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsMetrics $metrics;
    */
    public $metrics = null;

    /**
    * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metrics $competitor_metrics;
    */
    public $competitor_metrics = null;
 
}