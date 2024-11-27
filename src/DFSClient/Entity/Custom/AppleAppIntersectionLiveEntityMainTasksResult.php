<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AppleAppIntersectionLiveEntityMainTasksResultApp_ids;

#[\AllowDynamicProperties]
class AppleAppIntersectionLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|AppleAppIntersectionLiveEntityMainTasksResultApp_ids $app_ids;
    */
    public $app_ids = null;

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
    * @var array|AppleAppIntersectionLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}