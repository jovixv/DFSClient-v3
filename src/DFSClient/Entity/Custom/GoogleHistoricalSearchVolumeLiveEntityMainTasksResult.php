<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class GoogleHistoricalSearchVolumeLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

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
    * @var array|GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}