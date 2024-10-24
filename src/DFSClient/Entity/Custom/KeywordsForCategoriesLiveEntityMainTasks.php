<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordsForCategoriesLiveEntityMainTasksData;
use DFSClientV3\Entity\Custom\KeywordsForCategoriesLiveEntityMainTasksResult;

class KeywordsForCategoriesLiveEntityMainTasks
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
     * @var null|KeywordsForCategoriesLiveEntityMainTasksData;
     */
    public $data = null;

    /**
     * array|KeywordsForCategoriesLiveEntityMainTasksResult[] $result;.
     */
    public $result = [];
}
