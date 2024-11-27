<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class ClickstreamBulkSearchVolumeLiveEntityMainTasksResult 
{    
    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|ClickstreamBulkSearchVolumeLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}