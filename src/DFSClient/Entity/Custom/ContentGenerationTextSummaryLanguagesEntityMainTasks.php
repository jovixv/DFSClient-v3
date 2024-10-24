<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentGenerationTextSummaryLanguagesEntityMainTasksData;
use DFSClientV3\Entity\Custom\ContentGenerationTextSummaryLanguagesEntityMainTasksResult;

class ContentGenerationTextSummaryLanguagesEntityMainTasks
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
     * @var null|ContentGenerationTextSummaryLanguagesEntityMainTasksData;
     */
    public $data = null;

    /**
     * @var array|ContentGenerationTextSummaryLanguagesEntityMainTasksResult[];
     */
    public $result = [];
}
