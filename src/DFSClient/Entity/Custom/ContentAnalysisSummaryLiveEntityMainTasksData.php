<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksDataKeyword_fields;

class ContentAnalysisSummaryLiveEntityMainTasksData
{
    /**
     * @var null|string;
     */
    public $api = null;

    /**
     * @var null|string;
     */
    public $function = null;

    /**
     * @var null|string;
     */
    public $keyword = null;

    /**
     * @var null|ContentAnalysisSummaryLiveEntityMainTasksDataKeyword_fields;
     */
    public $keyword_fields = null;

    /**
     * @var null|integer;
     */
    public $internal_list_limit = null;

    /**
     * @var null|double;
     */
    public $positive_connotation_threshold = null;

    /**
     * @var null|integer;
     */
    public $sentiments_connotation_threshold = null;
}
