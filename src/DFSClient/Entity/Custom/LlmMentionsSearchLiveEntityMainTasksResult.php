<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class LlmMentionsSearchLiveEntityMainTasksResult 
{    
    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $current_offset;
    */
    public $current_offset = null;

    /**
    * @var null|string $search_after_token;
    */
    public $search_after_token = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|LlmMentionsSearchLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}