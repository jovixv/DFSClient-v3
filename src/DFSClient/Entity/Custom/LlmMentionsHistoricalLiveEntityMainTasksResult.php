<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class LlmMentionsHistoricalLiveEntityMainTasksResult 
{    
    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|LlmMentionsHistoricalLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}