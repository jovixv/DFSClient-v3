<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SearchVolumeHistoryLiveEntityMainTasksData;
use DFSClientV3\Entity\Custom\SearchVolumeHistoryLiveEntityMainTasksResult;

#[\AllowDynamicProperties]
class SearchVolumeHistoryLiveEntityMainTasks 
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
    * @var null|SearchVolumeHistoryLiveEntityMainTasksData $data;
    */
    public $data = null;

    /**
    * @var array|SearchVolumeHistoryLiveEntityMainTasksResult[] $result;
    */
    public $result = [];
 
}