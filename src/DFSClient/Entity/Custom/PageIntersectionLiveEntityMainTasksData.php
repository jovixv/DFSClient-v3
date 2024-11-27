<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\PageIntersectionLiveEntityMainTasksDataPages;

#[\AllowDynamicProperties]
class PageIntersectionLiveEntityMainTasksData 
{    
    /**
    * @var null|string $api;
    */
    public $api = null;

    /**
    * @var null|string $function;
    */
    public $function = null;

    /**
    * @var null|PageIntersectionLiveEntityMainTasksDataPages $pages;
    */
    public $pages = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|integer $limit;
    */
    public $limit = null;
 
}