<?php

namespace DFSClientV3\Entity\Custom;


class CompetitorsDomainLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $target;
    */
    public $target = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * array|CompetitorsDomainLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}