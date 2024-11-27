<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class ClickstreamDataforseoSearchVolumeLiveEntityMainTasksResult 
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
    * @var null|boolean $use_clickstream;
    */
    public $use_clickstream = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|ClickstreamDataforseoSearchVolumeLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}