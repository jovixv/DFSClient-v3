<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class LlmMentionsTopMentionedBrandsLiteLiveEntityMainTasksResult 
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
    * @var null|NULL $aggregated_metrics;
    */
    public $aggregated_metrics = null;

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiteLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}