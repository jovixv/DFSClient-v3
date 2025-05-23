<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResult 
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
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|BingHistoricalBulkTrafficEstimationLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}