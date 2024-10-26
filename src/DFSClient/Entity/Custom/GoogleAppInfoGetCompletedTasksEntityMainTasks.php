<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleAppInfoGetCompletedTasksEntityMainTasksData;
use DFSClientV3\Entity\Custom\GoogleAppInfoGetCompletedTasksEntityMainTasksResult;

class GoogleAppInfoGetCompletedTasksEntityMainTasks
{
    /**
     * @var null|string;
     */
    public $id = null;

    /**
     * @var null|integer;
     */
    public $status_code = null;

    /**
     * @var null|string;
     */
    public $status_message = null;

    /**
     * @var null|string;
     */
    public $time = null;

    /**
     * @var null|integer;
     */
    public $cost = null;

    /**
     * @var null|integer;
     */
    public $result_count = null;

    /**
     * @var null|array;
     */
    public $path = null;

    /**
     * @var null|GoogleAppInfoGetCompletedTasksEntityMainTasksData;
     */
    public $data = null;

    /**
     * @var array|GoogleAppInfoGetCompletedTasksEntityMainTasksResult[];
     */
    public $result = [];
}
