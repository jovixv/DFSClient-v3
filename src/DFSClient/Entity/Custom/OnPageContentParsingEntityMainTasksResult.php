<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMainTasksResultCrawl_status;

class OnPageContentParsingEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $crawl_progress = null;

    /**
     * @var null|OnPageContentParsingEntityMainTasksResultCrawl_status;
     */
    public $crawl_status = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|OnPageContentParsingEntityMainTasksResultItems[];
     */
    public $items = [];
}
