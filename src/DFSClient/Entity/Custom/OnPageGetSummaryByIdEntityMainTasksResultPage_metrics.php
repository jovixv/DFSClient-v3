<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetSummaryByIdEntityMainTasksResultPage_metricsChecks;

#[\AllowDynamicProperties]
class OnPageGetSummaryByIdEntityMainTasksResultPage_metrics 
{    
    /**
    * @var null|integer $links_external;
    */
    public $links_external = null;

    /**
    * @var null|integer $links_internal;
    */
    public $links_internal = null;

    /**
    * @var null|integer $duplicate_title;
    */
    public $duplicate_title = null;

    /**
    * @var null|integer $duplicate_description;
    */
    public $duplicate_description = null;

    /**
    * @var null|integer $duplicate_content;
    */
    public $duplicate_content = null;

    /**
    * @var null|integer $broken_links;
    */
    public $broken_links = null;

    /**
    * @var null|integer $broken_resources;
    */
    public $broken_resources = null;

    /**
    * @var null|OnPageGetSummaryByIdEntityMainTasksResultPage_metricsChecks $checks;
    */
    public $checks = null;
 
}