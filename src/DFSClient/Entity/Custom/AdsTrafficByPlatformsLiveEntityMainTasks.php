<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdsTrafficByPlatformsLiveEntityMainTasksData;
use DFSClientV3\Entity\Custom\AdsTrafficByPlatformsLiveEntityMainTasksResult;

class AdsTrafficByPlatformsLiveEntityMainTasks
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
     * @var null|AdsTrafficByPlatformsLiveEntityMainTasksData;
     */
    public $data = null;

    /**
     * array|AdsTrafficByPlatformsLiveEntityMainTasksResult[] $result;.
     */
    public $result = [];
}
