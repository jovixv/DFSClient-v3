<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\QuestionsAndAnswersGetResultsByIdEntityMainTasksData;
use DFSClientV3\Entity\Custom\QuestionsAndAnswersGetResultsByIdEntityMainTasksResult;

class QuestionsAndAnswersGetResultsByIdEntityMainTasks
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
     * @var null|QuestionsAndAnswersGetResultsByIdEntityMainTasksData;
     */
    public $data = null;

    /**
     * @var array|QuestionsAndAnswersGetResultsByIdEntityMainTasksResult[];
     */
    public $result = [];
}
