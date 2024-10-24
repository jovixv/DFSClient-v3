<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\RelevantPagesLiveEntityMainTasksData;
use DFSClientV3\Entity\Custom\RelevantPagesLiveEntityMainTasksResult;

class RelevantPagesLiveEntityMainTasks
{
    /**
     * @var null|string;
     */
    public $id = null;

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
    public $result_count = null;

    /**
     * @var null|array;
     */
    public $path = null;

    /**
     * @var null|RelevantPagesLiveEntityMainTasksData;
     */
    public $data = null;

    /**
     * array|RelevantPagesLiveEntityMainTasksResult[] $result;.
     */
    public $result = [];
}
