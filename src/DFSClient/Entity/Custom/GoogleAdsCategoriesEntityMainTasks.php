<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleAdsCategoriesEntityMainTasksData;
use DFSClientV3\Entity\Custom\GoogleAdsCategoriesEntityMainTasksResult;

class GoogleAdsCategoriesEntityMainTasks
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
     * @var null|GoogleAdsCategoriesEntityMainTasksData;
     */
    public $data = null;

    /**
     * array|GoogleAdsCategoriesEntityMainTasksResult[] $result;.
     */
    public $result = [];
}
