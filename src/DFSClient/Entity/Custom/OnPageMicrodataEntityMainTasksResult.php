<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageMicrodataEntityMainTasksResultCrawl_status;
use DFSClientV3\Entity\Custom\OnPageMicrodataEntityMainTasksResultTest_summary;

class OnPageMicrodataEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $crawl_progress = null;

    /**
     * @var null|OnPageMicrodataEntityMainTasksResultCrawl_status;
     */
    public $crawl_status = null;

    /**
     * @var null|OnPageMicrodataEntityMainTasksResultTest_summary;
     */
    public $test_summary = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|OnPageMicrodataEntityMainTasksResultItems[];
     */
    public $items = [];
}
