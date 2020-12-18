<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetLinksEntityMainTasksResultItemsImage;
use DFSClientV3\Entity\Custom\OnPageGetLinksEntityMainTasksResultItemsAnchor;
use DFSClientV3\Entity\Custom\OnPageGetLinksEntityMainTasksResultItemsAlternate;

class OnPageGetLinksEntityMainTasksResult 
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
    * @var array|OnPageGetLinksEntityMainTasksResultItemsImage[]|OnPageGetLinksEntityMainTasksResultItemsAnchor[]|OnPageGetLinksEntityMainTasksResultItemsAlternate[] $items;
    */
    public $items = [];
 
}