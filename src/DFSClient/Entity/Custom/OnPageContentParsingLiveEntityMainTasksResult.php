<?php

namespace DFSClientV3\Entity\Custom;

class OnPageContentParsingLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $crawl_progress = null;

    /**
     * @var null|null;
     */
    public $crawl_status = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|OnPageContentParsingLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
