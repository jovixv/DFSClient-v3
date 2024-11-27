<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsPaid;
use DFSClientV3\Entity\Custom\GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsLocal_pack;

#[\AllowDynamicProperties]
class GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;

    /**
    * @var null|GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsFeatured_snippet $featured_snippet;
    */
    public $featured_snippet = null;

    /**
    * @var null|GoogleCategoriesForDomainLiveEntityMainTasksResultItemsMetricsLocal_pack $local_pack;
    */
    public $local_pack = null;
 
}