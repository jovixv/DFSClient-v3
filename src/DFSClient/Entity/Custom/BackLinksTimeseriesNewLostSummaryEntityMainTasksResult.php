<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class BackLinksTimeseriesNewLostSummaryEntityMainTasksResult 
{    
    /**
    * @var null|string $target;
    */
    public $target = null;

    /**
    * @var null|NULL $date_from;
    */
    public $date_from = null;

    /**
    * @var null|NULL $date_to;
    */
    public $date_to = null;

    /**
    * @var null|string $group_range;
    */
    public $group_range = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|BackLinksTimeseriesNewLostSummaryEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}