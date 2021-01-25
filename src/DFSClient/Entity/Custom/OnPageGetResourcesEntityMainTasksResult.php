<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetResourcesEntityMainTasksResultItemsStylesheet;
use DFSClientV3\Entity\Custom\OnPageGetResourcesEntityMainTasksResultItemsScript;
use DFSClientV3\Entity\Custom\OnPageGetResourcesEntityMainTasksResultItemsImage;
use DFSClientV3\Entity\Custom\OnPageGetResourcesEntityMainTasksResultItemsBroken;

class OnPageGetResourcesEntityMainTasksResult
{
    /**
    * @var null|string $crawl_progress;
    */
    public $crawl_progress = null;

    /**
     * @var null|integer $total_items_count;
     */
    public $total_items_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|OnPageGetResourcesEntityMainTasksResultItemsStylesheet[]|OnPageGetResourcesEntityMainTasksResultItemsScript[]|OnPageGetResourcesEntityMainTasksResultItemsImage[]|OnPageGetResourcesEntityMainTasksResultItemsBroken[] $items;
    */
    public $items = [];

}
