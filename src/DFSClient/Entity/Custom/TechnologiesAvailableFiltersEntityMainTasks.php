<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TechnologiesAvailableFiltersEntityMainTasksData;
use DFSClientV3\Entity\Custom\TechnologiesAvailableFiltersEntityMainTasksResult;

class TechnologiesAvailableFiltersEntityMainTasks 
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
    * @var null|TechnologiesAvailableFiltersEntityMainTasksData $data;
    */
    public $data = null;

    /**
    * @var array|TechnologiesAvailableFiltersEntityMainTasksResult[] $result;
    */
    public $result = [];
 
}