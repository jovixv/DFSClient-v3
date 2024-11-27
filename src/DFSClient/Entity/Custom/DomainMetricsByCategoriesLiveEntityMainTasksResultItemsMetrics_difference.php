<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differenceOrganic;
use DFSClientV3\Entity\Custom\DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differencePaid;
use DFSClientV3\Entity\Custom\DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differenceFeatured_snippet;
use DFSClientV3\Entity\Custom\DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differenceLocal_pack;

#[\AllowDynamicProperties]
class DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_difference 
{    
    /**
    * @var null|DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differenceOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differencePaid $paid;
    */
    public $paid = null;

    /**
    * @var null|DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differenceFeatured_snippet $featured_snippet;
    */
    public $featured_snippet = null;

    /**
    * @var null|DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_differenceLocal_pack $local_pack;
    */
    public $local_pack = null;
 
}