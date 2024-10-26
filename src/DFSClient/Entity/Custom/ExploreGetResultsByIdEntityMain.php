<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ExploreGetResultsByIdEntityMainTasks;
use DFSClientV3\Models\ResponseModel;

class ExploreGetResultsByIdEntityMain extends ResponseModel
{
    /**
     * @var null|string;
     */
    public $version = '0.1.20200220';

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
     * array|ExploreGetResultsByIdEntityMainTasks[] $tasks;.
     */
    public $tasks = [];

    /**
     * @return ExploreGetResultsByIdEntityMainTasksResult[]|null
     */
    #[\Override]
    public function getResultsByPostID($postID): ?array
    {
        return parent::getResultsByPostID($postID);
    }
}
