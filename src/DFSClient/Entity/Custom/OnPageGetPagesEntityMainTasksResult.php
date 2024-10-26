<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetPagesEntityMainTasksResultItemsBroken;
use DFSClientV3\Entity\Custom\OnPageGetPagesEntityMainTasksResultItemsHtml;
use DFSClientV3\Entity\Custom\OnPageGetPagesEntityMainTasksResultItemsRedirect;

class OnPageGetPagesEntityMainTasksResult
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
     * @var array|OnPageGetPagesEntityMainTasksResultItemsBroken[]|OnPageGetPagesEntityMainTasksResultItemsRedirect[]|OnPageGetPagesEntityMainTasksResultItemsHtml[];
     */
    public $items = [];
}
