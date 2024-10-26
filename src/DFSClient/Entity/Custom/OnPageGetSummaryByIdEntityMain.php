<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetSummaryByIdEntityMainTasks;
use DFSClientV3\Models\ResponseModel;

class OnPageGetSummaryByIdEntityMain extends ResponseModel
{
    /**
     * @var null|string;
     */
    public $version = '0.1.20200717';

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
     * array|OnPageGetSummaryByIdEntityMainTasks[] $tasks;.
     */
    public $tasks = [];

    /**
     * @return OnPageGetSummaryByIdEntityMainTasksResult[]|null
     */
    #[\Override]
    public function getResultsByPostID($postID): ?array
    {
        return parent::getResultsByPostID($postID);
    }
}
