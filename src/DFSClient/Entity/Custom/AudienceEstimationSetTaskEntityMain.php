<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AudienceEstimationSetTaskEntityMainTasks;
use DFSClientV3\Models\ResponseModel;

class AudienceEstimationSetTaskEntityMain extends ResponseModel
{
    /**
     * @var null|string;
     */
    public $version = '0.1.20240801';

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
     * @var array|AudienceEstimationSetTaskEntityMainTasks[];
     */
    public $tasks = [];

    /**
     * @return \DFSClientV3\Entity\Custom\AudienceEstimationSetTaskEntityMainTasksResult|null
     */
    #[\Override]
    public function getResultsByPostID($postID): ?AudienceEstimationSetTaskEntityMainTasksResult
    {
        return parent::getResultsByPostID($postID);
    }
}
