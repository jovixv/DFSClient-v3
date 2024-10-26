<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageRawHtmlEntityMainTasksResultItems;

class OnPageRawHtmlEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $crawl_progress = null;

    /**
     * @var null|OnPageRawHtmlEntityMainTasksResultCrawl_status;
     */
    public $crawl_status = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var null|OnPageRawHtmlEntityMainTasksResultItems;
     */
    public $items = null;
}
