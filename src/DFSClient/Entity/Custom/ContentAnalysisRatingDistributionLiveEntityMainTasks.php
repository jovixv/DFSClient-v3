<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisRatingDistributionLiveEntityMainTasksData;
use DFSClientV3\Entity\Custom\ContentAnalysisRatingDistributionLiveEntityMainTasksResult;

class ContentAnalysisRatingDistributionLiveEntityMainTasks
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
     * @var null|ContentAnalysisRatingDistributionLiveEntityMainTasksData;
     */
    public $data = null;

    /**
     * @var array|ContentAnalysisRatingDistributionLiveEntityMainTasksResult[];
     */
    public $result = [];
}
