<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AmazonAsinGetAdvancedResultsByIdEntityMainTasks;
use DFSClientV3\Models\ResponseModel;

class AmazonAsinGetAdvancedResultsByIdEntityMain extends ResponseModel
{
    /**
     * @var null|string;
     */
    public $version = '0.1.20200421';

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
     * array|AmazonAsinGetAdvancedResultsByIdEntityMainTasks[] $tasks;.
     */
    public $tasks = [];

    /**
     * @return AmazonAsinGetAdvancedResultsByIdEntityMainTasksResult[]|null
     */
    #[\Override]
    public function getResultsByPostID($postID): ?array
    {
        return parent::getResultsByPostID($postID);
    }
}
