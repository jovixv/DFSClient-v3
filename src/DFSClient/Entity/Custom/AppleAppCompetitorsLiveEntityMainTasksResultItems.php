<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AppleAppCompetitorsLiveEntityMainTasksResultItemsCompetitor_metrics;
use DFSClientV3\Entity\Custom\AppleAppCompetitorsLiveEntityMainTasksResultItemsFull_metrics;

class AppleAppCompetitorsLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $se_type = null;

    /**
     * @var null|string;
     */
    public $app_id = null;

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
     * @var null|AppleAppCompetitorsLiveEntityMainTasksResultItemsCompetitor_metrics;
     */
    public $competitor_metrics = null;

    /**
     * @var null|AppleAppCompetitorsLiveEntityMainTasksResultItemsFull_metrics;
     */
    public $full_metrics = null;
}
