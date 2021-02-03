<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetDuplicateContentEntityMainTasksResultItemsPages;

class OnPageGetDuplicateContentEntityMainTasksResultItems 
{    
    /**
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var array|OnPageGetDuplicateContentEntityMainTasksResultItemsPages[] $pages;
    */
    public $pages = [];
 
}