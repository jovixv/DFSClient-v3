<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AudienceEstimationGetResultsByIdEntityMainTasksResultEst_audience_size;
use DFSClientV3\Entity\Custom\AudienceEstimationGetResultsByIdEntityMainTasksResultEst_clicks;
use DFSClientV3\Entity\Custom\AudienceEstimationGetResultsByIdEntityMainTasksResultEst_cost_per_event;
use DFSClientV3\Entity\Custom\AudienceEstimationGetResultsByIdEntityMainTasksResultEst_ctr;
use DFSClientV3\Entity\Custom\AudienceEstimationGetResultsByIdEntityMainTasksResultEst_impressions;
use DFSClientV3\Entity\Custom\AudienceEstimationGetResultsByIdEntityMainTasksResultEst_spend;

class AudienceEstimationGetResultsByIdEntityMainTasksResult
{
    /**
     * @var null|AudienceEstimationGetResultsByIdEntityMainTasksResultEst_impressions;
     */
    public $est_impressions = null;

    /**
     * @var null|AudienceEstimationGetResultsByIdEntityMainTasksResultEst_audience_size;
     */
    public $est_audience_size = null;

    /**
     * @var null|AudienceEstimationGetResultsByIdEntityMainTasksResultEst_clicks;
     */
    public $est_clicks = null;

    /**
     * @var null|AudienceEstimationGetResultsByIdEntityMainTasksResultEst_spend;
     */
    public $est_spend = null;

    /**
     * @var null|AudienceEstimationGetResultsByIdEntityMainTasksResultEst_cost_per_event;
     */
    public $est_cost_per_event = null;

    /**
     * @var null|AudienceEstimationGetResultsByIdEntityMainTasksResultEst_ctr;
     */
    public $est_ctr = null;

    /**
     * @var null|double;
     */
    public $suggested_bid = null;

    /**
     * @var null|double;
     */
    public $suggested_budget = null;

    /**
     * @var null|integer;
     */
    public $events_lost_to_bid = null;

    /**
     * @var null|integer;
     */
    public $events_lost_to_budget = null;

    /**
     * @var null|integer;
     */
    public $est_reach_audience_size = null;

    /**
     * @var null|integer;
     */
    public $est_reach_impressions = null;

    /**
     * @var null|string;
     */
    public $currency = null;
}
