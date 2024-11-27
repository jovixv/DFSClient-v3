<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class BacklinksCompetitorsLiveEntityMainTasksResult 
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
    * @var array|BacklinksCompetitorsLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}