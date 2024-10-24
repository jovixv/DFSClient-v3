<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrustpilotReviewsGetResultsByTaskIdEntityMainTasks;
use DFSClientV3\Models\ResponseModel;

class TrustpilotReviewsGetResultsByTaskIdEntityMain extends ResponseModel
{
    /**
     * @var null|string;
     */
    public $version = '0.1.20220216';

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
    public $tasks_count = null;

    /**
     * @var null|integer;
     */
    public $tasks_error = null;

    /**
     * @var array|TrustpilotReviewsGetResultsByTaskIdEntityMainTasks[];
     */
    public $tasks = [];

    /**
     * @return TrustpilotReviewsGetResultsByTaskIdEntityMainTasksResult[]|null
     */
    #[\Override]
    public function getResultsByPostID($postID): ?array
    {
        return parent::getResultsByPostID($postID);
    }
}
