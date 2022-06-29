<?php

namespace DFSClientV3\Entity\Custom;


class OnPagePageScreenshotEntityMainTasksResult 
{    
    /**
    * @var null|string $crawl_progress;
    */
    public $crawl_progress = null;

    /**
    * @var null|NULL $error_message;
    */
    public $error_message = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|OnPagePageScreenshotEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}