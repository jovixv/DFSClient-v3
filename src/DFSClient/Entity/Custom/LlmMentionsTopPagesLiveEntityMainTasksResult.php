<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopPagesLiveEntityMainTasksResultTotal;

#[\AllowDynamicProperties]
class LlmMentionsTopPagesLiveEntityMainTasksResult 
{    
    /**
    * @var null|LlmMentionsTopPagesLiveEntityMainTasksResultTotal $total;
    */
    public $total = null;

    /**
    * @var array|LlmMentionsTopPagesLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}