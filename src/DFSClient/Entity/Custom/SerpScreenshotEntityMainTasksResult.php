<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class SerpScreenshotEntityMainTasksResult 
{    
    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|SerpScreenshotEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}