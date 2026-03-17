<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetInvalidResourcesEntityMainTasksResultCrawl_status;

#[\AllowDynamicProperties]
class OnPageGetInvalidResourcesEntityMainTasksResult 
{    
    /**
    * @var null|string $crawl_progress;
    */
    public $crawl_progress = null;

    /**
    * @var null|OnPageGetInvalidResourcesEntityMainTasksResultCrawl_status $crawl_status;
    */
    public $crawl_status = null;

    /**
    * @var null|integer $total_items_count;
    */
    public $total_items_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|OnPageGetInvalidResourcesEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}