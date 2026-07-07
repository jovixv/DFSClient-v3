<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metrics;

#[\AllowDynamicProperties]
class LlmMentionsMultiTargetMetricsLiveEntityMainTasksResult 
{    
    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $offset;
    */
    public $offset = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var null|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metrics $aggregated_metrics;
    */
    public $aggregated_metrics = null;

    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}