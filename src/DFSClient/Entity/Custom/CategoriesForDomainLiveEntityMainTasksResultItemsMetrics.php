<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\CategoriesForDomainLiveEntityMainTasksResultItemsMetricsOrganic;
use DFSClientV3\Entity\Custom\CategoriesForDomainLiveEntityMainTasksResultItemsMetricsPaid;

#[\AllowDynamicProperties]
class CategoriesForDomainLiveEntityMainTasksResultItemsMetrics 
{    
    /**
    * @var null|CategoriesForDomainLiveEntityMainTasksResultItemsMetricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|CategoriesForDomainLiveEntityMainTasksResultItemsMetricsPaid $paid;
    */
    public $paid = null;
 
}