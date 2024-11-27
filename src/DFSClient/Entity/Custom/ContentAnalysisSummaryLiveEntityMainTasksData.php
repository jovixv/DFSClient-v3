<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksDataKeyword_fields;

#[\AllowDynamicProperties]
class ContentAnalysisSummaryLiveEntityMainTasksData 
{    
    /**
    * @var null|string $api;
    */
    public $api = null;

    /**
    * @var null|string $function;
    */
    public $function = null;

    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|ContentAnalysisSummaryLiveEntityMainTasksDataKeyword_fields $keyword_fields;
    */
    public $keyword_fields = null;

    /**
    * @var null|integer $internal_list_limit;
    */
    public $internal_list_limit = null;

    /**
    * @var null|double $positive_connotation_threshold;
    */
    public $positive_connotation_threshold = null;

    /**
    * @var null|integer $sentiments_connotation_threshold;
    */
    public $sentiments_connotation_threshold = null;
 
}