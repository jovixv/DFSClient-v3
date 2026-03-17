<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetInvalidResourcesEntityMainTasksResultItemsMeta;

#[\AllowDynamicProperties]
class OnPageGetInvalidResourcesEntityMainTasksResultItems 
{    
    /**
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var null|string $reason;
    */
    public $reason = null;

    /**
    * @var null|integer $status_code;
    */
    public $status_code = null;

    /**
    * @var null|string $fetch_time;
    */
    public $fetch_time = null;

    /**
    * @var null|OnPageGetInvalidResourcesEntityMainTasksResultItemsMeta $meta;
    */
    public $meta = null;
 
}