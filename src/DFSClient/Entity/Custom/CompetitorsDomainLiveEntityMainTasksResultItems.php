<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\CompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metrics;
use DFSClientV3\Entity\Custom\CompetitorsDomainLiveEntityMainTasksResultItemsMetrics;

class CompetitorsDomainLiveEntityMainTasksResultItems 
{    
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
    * @var null|CompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metrics $full_domain_metrics;
    */
    public $full_domain_metrics = null;

    /**
    * @var null|CompetitorsDomainLiveEntityMainTasksResultItemsMetrics $metrics;
    */
    public $metrics = null;
 
}