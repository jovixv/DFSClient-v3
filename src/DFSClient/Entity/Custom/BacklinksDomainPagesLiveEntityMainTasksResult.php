<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BacklinksDomainPagesLiveEntityMainTasksResultItemsBacklinks_domain_page;

class BacklinksDomainPagesLiveEntityMainTasksResult
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
    * @var array|BacklinksDomainPagesLiveEntityMainTasksResultItemsBacklinks_domain_page[] $items;
    */
    public $items = [];
 
}
