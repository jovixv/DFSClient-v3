<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetDuplicateContentEntityMainTasksResultItems;

class OnPageGetDuplicateContentEntityMainTasksResult
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
     * @var array|OnPageGetDuplicateContentEntityMainTasksResultItems[];
     */
    public $items = [];
}
