<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class OnPageContentParsingLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $crawl_progress;
    */
    public $crawl_progress = null;

    /**
    * @var null|NULL $crawl_status;
    */
    public $crawl_status = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}