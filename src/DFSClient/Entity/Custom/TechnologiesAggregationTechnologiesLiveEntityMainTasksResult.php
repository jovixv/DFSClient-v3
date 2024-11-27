<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class TechnologiesAggregationTechnologiesLiveEntityMainTasksResult 
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
    * @var null|integer $offset;
    */
    public $offset = null;

    /**
    * @var array|TechnologiesAggregationTechnologiesLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}