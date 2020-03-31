<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordsForCategoryGetCompletedTasksEntityMainTasksData;
use DFSClientV3\Entity\Custom\KeywordsForCategoryGetCompletedTasksEntityMainTasksResult;

class KeywordsForCategoryGetCompletedTasksEntityMainTasks 
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
    * @var null|KeywordsForCategoryGetCompletedTasksEntityMainTasksData $data;
    */
    public $data = null;

    /**
    * array|KeywordsForCategoryGetCompletedTasksEntityMainTasksResult[] $result;
    */
    public $result = [];
 
}