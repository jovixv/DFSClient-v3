<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metrics;

#[\AllowDynamicProperties]
class LlmMentionsTopMentionedDomainsLiveEntityMainTasksResult 
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
    * @var null|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metrics $aggregated_metrics;
    */
    public $aggregated_metrics = null;

    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}