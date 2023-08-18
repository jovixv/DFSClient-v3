<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageMicrodataEntityMainTasksResultCrawl_status;
use DFSClientV3\Entity\Custom\OnPageMicrodataEntityMainTasksResultTest_summary;

class OnPageMicrodataEntityMainTasksResult 
{    
    /**
    * @var null|string $crawl_progress;
    */
    public $crawl_progress = null;

    /**
    * @var null|OnPageMicrodataEntityMainTasksResultCrawl_status $crawl_status;
    */
    public $crawl_status = null;

    /**
    * @var null|OnPageMicrodataEntityMainTasksResultTest_summary $test_summary;
    */
    public $test_summary = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|OnPageMicrodataEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}