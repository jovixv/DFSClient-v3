<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageLighthouseLanguagesEntityMainTasks;
use DFSClientV3\Models\ResponseModel;

class OnPageLighthouseLanguagesEntityMain extends ResponseModel
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
     * @var array|OnPageLighthouseLanguagesEntityMainTasks[];
     */
    public $tasks = [];

    /**
     * @return OnPageLighthouseLanguagesEntityMainTasksResult|null
     */
    #[\Override]
    public function getResultsByPostID($postID): ?OnPageLighthouseLanguagesEntityMainTasksResult
    {
        return parent::getResultsByPostID($postID);
    }
}
