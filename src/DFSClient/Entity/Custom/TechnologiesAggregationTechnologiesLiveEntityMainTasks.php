<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TechnologiesAggregationTechnologiesLiveEntityMainTasksData;
use DFSClientV3\Entity\Custom\TechnologiesAggregationTechnologiesLiveEntityMainTasksResult;

#[\AllowDynamicProperties]
class TechnologiesAggregationTechnologiesLiveEntityMainTasks 
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
    * @var null|integer $cost;
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
    * @var null|TechnologiesAggregationTechnologiesLiveEntityMainTasksData $data;
    */
    public $data = null;

    /**
    * @var array|TechnologiesAggregationTechnologiesLiveEntityMainTasksResult[] $result;
    */
    public $result = [];
 
}