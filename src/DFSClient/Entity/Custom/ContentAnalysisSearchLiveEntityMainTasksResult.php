<?php

namespace DFSClientV3\Entity\Custom;

class ContentAnalysisSearchLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $offset_token = null;

    /**
     * @var null|integer;
     */
    public $total_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|ContentAnalysisSearchLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
