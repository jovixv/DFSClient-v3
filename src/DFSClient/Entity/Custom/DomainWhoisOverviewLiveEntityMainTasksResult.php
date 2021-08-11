<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DomainWhoisOverviewLiveEntityMainTasksResultItems;

class DomainWhoisOverviewLiveEntityMainTasksResult 
{    
    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|DomainWhoisOverviewLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}