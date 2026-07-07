<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metrics;

#[\AllowDynamicProperties]
class LlmMentionsTopMentionedBrandsLiveEntityMainTasksResult 
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
    * @var null|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metrics $aggregated_metrics;
    */
    public $aggregated_metrics = null;

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}