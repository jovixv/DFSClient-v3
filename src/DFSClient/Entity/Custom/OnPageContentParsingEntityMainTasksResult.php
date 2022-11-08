<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMainTasksResultCrawl_status;

class OnPageContentParsingEntityMainTasksResult 
{    
    /**
    * @var null|string $crawl_progress;
    */
    public $crawl_progress = null;

    /**
    * @var null|OnPageContentParsingEntityMainTasksResultCrawl_status $crawl_status;
    */
    public $crawl_status = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|OnPageContentParsingEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}