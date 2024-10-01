<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AudienceEstimationLiveEntityMainTasksData;
use DFSClientV3\Entity\Custom\AudienceEstimationLiveEntityMainTasksResult;

class AudienceEstimationLiveEntityMainTasks 
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
    * @var null|AudienceEstimationLiveEntityMainTasksData $data;
    */
    public $data = null;

    /**
    * @var array|AudienceEstimationLiveEntityMainTasksResult[] $result;
    */
    public $result = [];
 
}