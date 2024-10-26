<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleAppCompetitorsLiveEntityMainTasksResultItemsCompetitor_metrics;
use DFSClientV3\Entity\Custom\GoogleAppCompetitorsLiveEntityMainTasksResultItemsFull_metrics;

class GoogleAppCompetitorsLiveEntityMainTasksResultItems
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
     * @var null|GoogleAppCompetitorsLiveEntityMainTasksResultItemsCompetitor_metrics;
     */
    public $competitor_metrics = null;

    /**
     * @var null|GoogleAppCompetitorsLiveEntityMainTasksResultItemsFull_metrics;
     */
    public $full_metrics = null;
}
