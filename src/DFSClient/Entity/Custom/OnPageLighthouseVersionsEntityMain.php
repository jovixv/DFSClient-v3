<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageLighthouseVersionsEntityMainTasks;
use DFSClientV3\Models\ResponseModel;

class OnPageLighthouseVersionsEntityMain extends ResponseModel
{
    /**
     * @var null|string;
     */
    public $version = '0.1.20240514';

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
     * @var array|OnPageLighthouseVersionsEntityMainTasks[];
     */
    public $tasks = [];

    /**
     * @return OnPageLighthouseVersionsEntityMainTasksResult|null
     */
    #[\Override]
    public function getResultsByPostID($postID): ?OnPageLighthouseVersionsEntityMainTasksResult
    {
        return parent::getResultsByPostID($postID);
    }
}
