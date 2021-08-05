<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BackLinksHistoryEntityMainTasksResultItemsBacklinks_history;

class BackLinksHistoryEntityMainTasksResult 
{    
    /**
    * @var null|string $target;
    */
    public $target = null;

    /**
    * @var null|string $date_from;
    */
    public $date_from = null;

    /**
    * @var null|string $date_to;
    */
    public $date_to = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|BackLinksHistoryEntityMainTasksResultItemsBacklinks_history[] $items;
    */
    public $items = [];
 
}