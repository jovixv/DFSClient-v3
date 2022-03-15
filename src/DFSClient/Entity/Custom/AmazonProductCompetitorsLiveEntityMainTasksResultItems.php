<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AmazonProductCompetitorsLiveEntityMainTasksResultItemsCompetitor_metrics;
use DFSClientV3\Entity\Custom\AmazonProductCompetitorsLiveEntityMainTasksResultItemsFull_metrics;

class AmazonProductCompetitorsLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|string $asin;
    */
    public $asin = null;

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
    * @var null|AmazonProductCompetitorsLiveEntityMainTasksResultItemsCompetitor_metrics $competitor_metrics;
    */
    public $competitor_metrics = null;

    /**
    * @var null|AmazonProductCompetitorsLiveEntityMainTasksResultItemsFull_metrics $full_metrics;
    */
    public $full_metrics = null;
 
}