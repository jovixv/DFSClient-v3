<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetResourcesEntityMainTasksResultItemsBroken;
use DFSClientV3\Entity\Custom\OnPageGetResourcesEntityMainTasksResultItemsImage;
use DFSClientV3\Entity\Custom\OnPageGetResourcesEntityMainTasksResultItemsScript;
use DFSClientV3\Entity\Custom\OnPageGetResourcesEntityMainTasksResultItemsStylesheet;

class OnPageGetResourcesEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $crawl_progress = null;

    /**
     * @var null|integer;
     */
    public $total_items_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|OnPageGetResourcesEntityMainTasksResultItemsStylesheet[]|OnPageGetResourcesEntityMainTasksResultItemsScript[]|OnPageGetResourcesEntityMainTasksResultItemsImage[]|OnPageGetResourcesEntityMainTasksResultItemsBroken[];
     */
    public $items = [];
}
