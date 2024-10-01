<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AudienceEstimationLiveEntityMainTasksResultEst_impressions;
use DFSClientV3\Entity\Custom\AudienceEstimationLiveEntityMainTasksResultEst_audience_size;
use DFSClientV3\Entity\Custom\AudienceEstimationLiveEntityMainTasksResultEst_clicks;
use DFSClientV3\Entity\Custom\AudienceEstimationLiveEntityMainTasksResultEst_spend;
use DFSClientV3\Entity\Custom\AudienceEstimationLiveEntityMainTasksResultEst_cost_per_event;
use DFSClientV3\Entity\Custom\AudienceEstimationLiveEntityMainTasksResultEst_ctr;

class AudienceEstimationLiveEntityMainTasksResult 
{    
    /**
    * @var null|AudienceEstimationLiveEntityMainTasksResultEst_impressions $est_impressions;
    */
    public $est_impressions = null;

    /**
    * @var null|AudienceEstimationLiveEntityMainTasksResultEst_audience_size $est_audience_size;
    */
    public $est_audience_size = null;

    /**
    * @var null|AudienceEstimationLiveEntityMainTasksResultEst_clicks $est_clicks;
    */
    public $est_clicks = null;

    /**
    * @var null|AudienceEstimationLiveEntityMainTasksResultEst_spend $est_spend;
    */
    public $est_spend = null;

    /**
    * @var null|AudienceEstimationLiveEntityMainTasksResultEst_cost_per_event $est_cost_per_event;
    */
    public $est_cost_per_event = null;

    /**
    * @var null|AudienceEstimationLiveEntityMainTasksResultEst_ctr $est_ctr;
    */
    public $est_ctr = null;

    /**
    * @var null|double $suggested_bid;
    */
    public $suggested_bid = null;

    /**
    * @var null|double $suggested_budget;
    */
    public $suggested_budget = null;

    /**
    * @var null|integer $events_lost_to_bid;
    */
    public $events_lost_to_bid = null;

    /**
    * @var null|integer $events_lost_to_budget;
    */
    public $events_lost_to_budget = null;

    /**
    * @var null|integer $est_reach_audience_size;
    */
    public $est_reach_audience_size = null;

    /**
    * @var null|integer $est_reach_impressions;
    */
    public $est_reach_impressions = null;

    /**
    * @var null|string $currency;
    */
    public $currency = null;
 
}