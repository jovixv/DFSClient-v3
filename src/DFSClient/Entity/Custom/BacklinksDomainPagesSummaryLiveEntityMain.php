<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BacklinksDomainPagesSummaryLiveEntityMainTasks;
use DFSClientV3\Models\ResponseModel;

class BacklinksDomainPagesSummaryLiveEntityMain extends ResponseModel
{
    /**
     * @var null|string;
     */
    public $version = '0.1.20220718';

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
     * @var array|BacklinksDomainPagesSummaryLiveEntityMainTasks[];
     */
    public $tasks = [];

    /**
     * @return BacklinksDomainPagesSummaryLiveEntityMainTasksResult[]|null
     */
    #[\Override]
    public function getResultsByPostID($postID): ?array
    {
        return parent::getResultsByPostID($postID);
    }
}
