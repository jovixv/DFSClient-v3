<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SettingOnPageTasksEntityMainTasks;
use DFSClientV3\Models\ResponseModel;

class SettingOnPageTasksEntityMain extends ResponseModel
{
    /**
     * @var null|string;
     */
    public $version = '0.1.20200805';

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
     * @var array|SettingOnPageTasksEntityMainTasks[];
     */
    public $tasks = [];

    /**
     * @return \DFSClientV3\Entity\Custom\SettingOnPageTasksEntityMainTasksResult|null
     */
    #[\Override]
    public function getResultsByPostID($postID): ?SettingOnPageTasksEntityMainTasksResult
    {
        return parent::getResultsByPostID($postID);
    }
}
