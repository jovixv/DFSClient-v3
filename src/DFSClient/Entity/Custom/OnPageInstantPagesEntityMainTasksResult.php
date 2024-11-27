<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class OnPageInstantPagesEntityMainTasksResult
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
    * @var array|OnPageInstantPagesEntityMainTasksResultItemsBroken[]|OnPageInstantPagesEntityMainTasksResultItemsRedirect[]|OnPageInstantPagesEntityMainTasksResultItemsHtml[] $items;
    */
    public $items = [];

}
