<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\PageIntersectionLiveEntityMainTasksResultPages;

class PageIntersectionLiveEntityMainTasksResult 
{    
    /**
    * @var null|PageIntersectionLiveEntityMainTasksResultPages $pages;
    */
    public $pages = null;

    /**
    * @var null|NULL $exclude_pages;
    */
    public $exclude_pages = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|PageIntersectionLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}