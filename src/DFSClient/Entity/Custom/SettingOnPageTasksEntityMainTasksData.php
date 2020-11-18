<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TagsData;

class SettingOnPageTasksEntityMainTasksData 
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
    * @var null|string $target;
    */
    public $target = null;

    /**
    * @var null|integer $max_crawl_pages;
    */
    public $max_crawl_pages = null;

    /**
     * @var TagsData
     */
    public $tag = null;
 
}
