<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleTopSearchesLiveEntityMainTasksData;
use DFSClientV3\Entity\Custom\GoogleTopSearchesLiveEntityMainTasksResult;

class GoogleTopSearchesLiveEntityMainTasks
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
     * @var null|double;
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
     * @var null|GoogleTopSearchesLiveEntityMainTasksData;
     */
    public $data = null;

    /**
     * @var array|GoogleTopSearchesLiveEntityMainTasksResult[];
     */
    public $result = [];
}
