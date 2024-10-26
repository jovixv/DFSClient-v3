<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingAdsSearchVolumeLiveEntityMainTasksData;
use DFSClientV3\Entity\Custom\BingAdsSearchVolumeLiveEntityMainTasksResult;

class BingAdsSearchVolumeLiveEntityMainTasks
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
     * @var null|BingAdsSearchVolumeLiveEntityMainTasksData;
     */
    public $data = null;

    /**
     * @var array|BingAdsSearchVolumeLiveEntityMainTasksResult[];
     */
    public $result = [];
}
