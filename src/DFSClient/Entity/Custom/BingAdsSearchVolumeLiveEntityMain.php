<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingAdsSearchVolumeLiveEntityMainTasks;
use DFSClientV3\Models\ResponseModel;

class BingAdsSearchVolumeLiveEntityMain extends ResponseModel
{
    /**
     * @var null|string;
     */
    public $version = '0.1.20201204';

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
    public $tasks_count = null;

    /**
     * @var null|integer;
     */
    public $tasks_error = null;

    /**
     * @var array|BingAdsSearchVolumeLiveEntityMainTasks[];
     */
    public $tasks = [];

    /**
     * @return BingAdsSearchVolumeLiveEntityMainTasksResult[]|null
     */
    #[\Override]
    public function getResultsByPostID($postID): ?array
    {
        return parent::getResultsByPostID($postID);
    }
}
