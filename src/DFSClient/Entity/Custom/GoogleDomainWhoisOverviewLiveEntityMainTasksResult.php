<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class GoogleDomainWhoisOverviewLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|GoogleDomainWhoisOverviewLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}