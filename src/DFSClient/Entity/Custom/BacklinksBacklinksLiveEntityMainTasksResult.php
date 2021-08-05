<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BacklinksBacklinksLiveEntityMainTasksResultItemsBacklink;

class BacklinksBacklinksLiveEntityMainTasksResult
{    
    /**
    * @var null|string $target;
    */
    public $target = null;

    /**
    * @var null|string $mode;
    */
    public $mode = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|BacklinksBacklinksLiveEntityMainTasksResultItemsBacklink[] $items;
    */
    public $items = [];
 
}
