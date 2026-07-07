<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metrics;

#[\AllowDynamicProperties]
class LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResult 
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
    * @var null|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metrics $aggregated_metrics;
    */
    public $aggregated_metrics = null;

    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}