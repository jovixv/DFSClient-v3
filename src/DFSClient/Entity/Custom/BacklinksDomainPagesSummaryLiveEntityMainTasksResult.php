<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class BacklinksDomainPagesSummaryLiveEntityMainTasksResult 
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
    * @var array|BacklinksDomainPagesSummaryLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}