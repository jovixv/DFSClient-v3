<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LanguagesEntityMainTasksData;
use DFSClientV3\Entity\Custom\LanguagesEntityMainTasksResult;

class LanguagesEntityMainTasks
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
     * @var null|integer;
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
     * @var null|LanguagesEntityMainTasksData;
     */
    public $data = null;

    /**
     * array|LanguagesEntityMainTasksResult[] $result;.
     */
    public $result = [];
}
