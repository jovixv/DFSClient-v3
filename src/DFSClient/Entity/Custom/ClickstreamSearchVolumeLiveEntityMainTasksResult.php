<?php

namespace DFSClientV3\Entity\Custom;


class ClickstreamSearchVolumeLiveEntityMainTasksResult 
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
    * @var array|ClickstreamSearchVolumeLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}