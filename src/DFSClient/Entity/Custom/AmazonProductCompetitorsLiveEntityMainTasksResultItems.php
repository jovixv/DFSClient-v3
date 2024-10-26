<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AmazonProductCompetitorsLiveEntityMainTasksResultItemsCompetitor_metrics;
use DFSClientV3\Entity\Custom\AmazonProductCompetitorsLiveEntityMainTasksResultItemsFull_metrics;

class AmazonProductCompetitorsLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $se_type = null;

    /**
     * @var null|string;
     */
    public $asin = null;

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
     * @var null|AmazonProductCompetitorsLiveEntityMainTasksResultItemsCompetitor_metrics;
     */
    public $competitor_metrics = null;

    /**
     * @var null|AmazonProductCompetitorsLiveEntityMainTasksResultItemsFull_metrics;
     */
    public $full_metrics = null;
}
