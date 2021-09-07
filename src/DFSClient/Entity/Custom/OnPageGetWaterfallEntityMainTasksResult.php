<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetWaterfallEntityMainTasksResultItems;

class OnPageGetWaterfallEntityMainTasksResult 
{    
    /**
    * @var null|string $crawl_progress;
    */
    public $crawl_progress = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|OnPageGetWaterfallEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}