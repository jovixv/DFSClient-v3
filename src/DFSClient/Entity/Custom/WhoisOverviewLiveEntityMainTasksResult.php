<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class WhoisOverviewLiveEntityMainTasksResult 
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
    * @var array|WhoisOverviewLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}