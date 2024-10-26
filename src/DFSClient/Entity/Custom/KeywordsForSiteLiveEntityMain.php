<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordsForSiteLiveEntityMainTasks;
use DFSClientV3\Models\ResponseModel;

class KeywordsForSiteLiveEntityMain extends ResponseModel
{
    /**
     * @var null|string;
     */
    public $version = '0.1.20200325';

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
     * array|KeywordsForSiteLiveEntityMainTasks[] $tasks;.
     */
    public $tasks = [];

    /**
     * @return KeywordsForSiteLiveEntityMainTasksResult[]|null
     */
    #[\Override]
    public function getResultsByPostID($postID): ?array
    {
        return parent::getResultsByPostID($postID);
    }
}
