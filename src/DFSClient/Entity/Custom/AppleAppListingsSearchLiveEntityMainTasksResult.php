<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class AppleAppListingsSearchLiveEntityMainTasksResult 
{    
    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $count;
    */
    public $count = null;

    /**
    * @var null|integer $offset;
    */
    public $offset = null;

    /**
    * @var null|string $offset_token;
    */
    public $offset_token = null;

    /**
    * @var array|AppleAppListingsSearchLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}