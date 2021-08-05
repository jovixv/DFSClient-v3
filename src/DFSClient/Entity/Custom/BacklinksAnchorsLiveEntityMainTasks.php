<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BacklinksAnchorsLiveEntityMainTasksResult;

class BacklinksAnchorsLiveEntityMainTasks
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
    * @var null|BacklinksAnchorsLiveEntityMainTasksData $data;
    */
    public $data = null;

    /**
    * @var array|BacklinksAnchorsLiveEntityMainTasksResult[] $result;
    */
    public $result = [];
 
}
