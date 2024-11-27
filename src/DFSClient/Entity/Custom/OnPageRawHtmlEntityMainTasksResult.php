<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageRawHtmlEntityMainTasksResultItems;

#[\AllowDynamicProperties]
class OnPageRawHtmlEntityMainTasksResult 
{    
    /**
    * @var null|string $crawl_progress;
    */
    public $crawl_progress = null;

    /**
    * @var null|OnPageRawHtmlEntityMainTasksResultCrawl_status $crawl_status;
    */
    public $crawl_status = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var null|OnPageRawHtmlEntityMainTasksResultItems $items;
    */
    public $items = null;
 
}