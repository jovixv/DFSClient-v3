<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class GoogleAppCompetitorsLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|string $app_id;
    */
    public $app_id = null;

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
    * @var array|GoogleAppCompetitorsLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}