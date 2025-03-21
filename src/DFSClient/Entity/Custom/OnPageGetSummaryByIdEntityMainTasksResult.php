<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetSummaryByIdEntityMainTasksResultDomain_info;
use DFSClientV3\Entity\Custom\OnPageGetSummaryByIdEntityMainTasksResultPage_metrics;

#[\AllowDynamicProperties]
class OnPageGetSummaryByIdEntityMainTasksResult 
{    
    /**
    * @var null|OnPageGetSummaryByIdEntityMainTasksResultDomain_info $domain_info;
    */
    public $domain_info = null;

    /**
    * @var null|OnPageGetSummaryByIdEntityMainTasksResultPage_metrics $page_metrics;
    */
    public $page_metrics = null;
 
}