<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksData;
use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResult;

#[\AllowDynamicProperties]
class GoogleRelatedKeywordsLiveEntityMainTasks 
{    
    /**
    * @var null|string $id;
    */
    public $id = null;

    /**
    * @var null|integer $status_code;
    */
    public $status_code = null;

    /**
    * @var null|string $status_message;
    */
    public $status_message = null;

    /**
    * @var null|string $time;
    */
    public $time = null;

    /**
    * @var null|double $cost;
    */
    public $cost = null;

    /**
    * @var null|integer $result_count;
    */
    public $result_count = null;

    /**
    * @var null|array $path;
    */
    public $path = null;

    /**
    * @var null|GoogleRelatedKeywordsLiveEntityMainTasksData $data;
    */
    public $data = null;

    /**
    * @var array|GoogleRelatedKeywordsLiveEntityMainTasksResult[] $result;
    */
    public $result = [];
 
}