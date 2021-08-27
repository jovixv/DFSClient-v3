<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BackLinksDomainIntersectionEntityMainTasksResultTargets;

class BackLinksDomainIntersectionEntityMainTasksResult 
{    
    /**
    * @var null|BackLinksDomainIntersectionEntityMainTasksResultTargets $targets;
    */
    public $targets = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|BackLinksDomainIntersectionEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}