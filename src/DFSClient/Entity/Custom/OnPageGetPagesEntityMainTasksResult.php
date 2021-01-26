<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetPagesEntityMainTasksResultItemsBroken;
use DFSClientV3\Entity\Custom\OnPageGetPagesEntityMainTasksResultItemsRedirect;
use DFSClientV3\Entity\Custom\OnPageGetPagesEntityMainTasksResultItemsHtml;

class OnPageGetPagesEntityMainTasksResult
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
    * @var array|OnPageGetPagesEntityMainTasksResultItemsBroken[]|OnPageGetPagesEntityMainTasksResultItemsRedirect[]|OnPageGetPagesEntityMainTasksResultItemsHtml[] $items;
    */
    public $items = [];

}
