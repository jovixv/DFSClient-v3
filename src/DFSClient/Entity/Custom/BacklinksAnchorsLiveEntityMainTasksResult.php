<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BacklinksAnchorsLiveEntityMainTasksResultItems;

class BacklinksAnchorsLiveEntityMainTasksResult
{    
    /**
    * @var null|string $target;
    */
    public $target = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|BacklinksAnchorsLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}
