<?php

namespace DFSClientV3\Entity\Custom;

class OnPageInstantPagesEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $crawl_progress = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|OnPageInstantPagesEntityMainTasksResultItemsBroken[]|OnPageInstantPagesEntityMainTasksResultItemsRedirect[]|OnPageInstantPagesEntityMainTasksResultItemsHtml[];
     */
    public $items = [];
}
