<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class TechnologiesTechnologyStatsLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $technology;
    */
    public $technology = null;

    /**
    * @var null|string $date_from;
    */
    public $date_from = null;

    /**
    * @var null|string $date_to;
    */
    public $date_to = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|TechnologiesTechnologyStatsLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}