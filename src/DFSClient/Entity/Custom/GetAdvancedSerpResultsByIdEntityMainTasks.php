<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksData;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksParams;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResult;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksData_in;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksMeta_data;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksMain_data;

class GetAdvancedSerpResultsByIdEntityMainTasks 
{    
    /**
    * @var null|string $id;
    */
    public $id = null;

    /**
    * @var null|string $post_id;
    */
    public $post_id = null;

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
    * @var null|GetAdvancedSerpResultsByIdEntityMainTasksData $data;
    */
    public $data = null;

    /**
    * @var null|GetAdvancedSerpResultsByIdEntityMainTasksParams $params;
    */
    public $params = null;

    /**
    * array|GetAdvancedSerpResultsByIdEntityMainTasksResult[] $result;
    */
    public $result = [];

    /**
    * @var null|GetAdvancedSerpResultsByIdEntityMainTasksData_in $data_in;
    */
    public $data_in = null;

    /**
    * @var null|GetAdvancedSerpResultsByIdEntityMainTasksMeta_data $meta_data;
    */
    public $meta_data = null;

    /**
    * @var null|GetAdvancedSerpResultsByIdEntityMainTasksMain_data $main_data;
    */
    public $main_data = null;
 
}