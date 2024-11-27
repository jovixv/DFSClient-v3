<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AppleAppCompetitorsLiveEntityMainTasksResultItemsCompetitor_metrics;
use DFSClientV3\Entity\Custom\AppleAppCompetitorsLiveEntityMainTasksResultItemsFull_metrics;

#[\AllowDynamicProperties]
class AppleAppCompetitorsLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|string $app_id;
    */
    public $app_id = null;

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
    * @var null|AppleAppCompetitorsLiveEntityMainTasksResultItemsCompetitor_metrics $competitor_metrics;
    */
    public $competitor_metrics = null;

    /**
    * @var null|AppleAppCompetitorsLiveEntityMainTasksResultItemsFull_metrics $full_metrics;
    */
    public $full_metrics = null;
 
}