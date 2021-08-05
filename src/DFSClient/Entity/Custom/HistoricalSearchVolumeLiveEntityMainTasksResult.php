<?php

namespace DFSClientV3\Entity\Custom;


class HistoricalSearchVolumeLiveEntityMainTasksResult 
{    
    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|HistoricalSearchVolumeLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}