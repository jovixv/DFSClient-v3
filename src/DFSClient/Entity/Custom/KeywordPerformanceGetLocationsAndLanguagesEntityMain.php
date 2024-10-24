<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordPerformanceGetLocationsAndLanguagesEntityMainTasks;
use DFSClientV3\Models\ResponseModel;

class KeywordPerformanceGetLocationsAndLanguagesEntityMain extends ResponseModel
{
    /**
     * @var null|string;
     */
    public $version = '0.1.20210105';

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
     * @var array|KeywordPerformanceGetLocationsAndLanguagesEntityMainTasks[];
     */
    public $tasks = [];

    /**
     * @return KeywordPerformanceGetLocationsAndLanguagesEntityMainTasksResult[]|null
     */
    #[\Override]
    public function getResultsByPostID($postID): ?array
    {
        return parent::getResultsByPostID($postID);
    }
}
