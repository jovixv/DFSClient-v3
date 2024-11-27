<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class BacklinksReferringNetworksLiveEntityMainTasksResult 
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
    * @var array|BacklinksReferringNetworksLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}