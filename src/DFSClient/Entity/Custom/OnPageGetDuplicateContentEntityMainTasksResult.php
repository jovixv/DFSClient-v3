<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetDuplicateContentEntityMainTasksResultItems;

class OnPageGetDuplicateContentEntityMainTasksResult 
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
    * @var array|OnPageGetDuplicateContentEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}