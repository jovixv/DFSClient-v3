<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_history;
use DFSClientV3\Entity\Custom\DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_difference;

#[\AllowDynamicProperties]
class DomainMetricsByCategoriesLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|array $top_categories;
    */
    public $top_categories = null;

    /**
    * @var null|double $organic_etv;
    */
    public $organic_etv = null;

    /**
    * @var null|integer $organic_count;
    */
    public $organic_count = null;

    /**
    * @var null|integer $organic_is_lost;
    */
    public $organic_is_lost = null;

    /**
    * @var null|integer $organic_is_new;
    */
    public $organic_is_new = null;

    /**
    * @var null|string $domain;
    */
    public $domain = null;

    /**
    * @var null|string $main_domain;
    */
    public $main_domain = null;

    /**
    * @var null|array $metrics_history;
    */
    public $metrics_history = null;

    /**
    * @var null|DomainMetricsByCategoriesLiveEntityMainTasksResultItemsMetrics_difference $metrics_difference;
    */
    public $metrics_difference = null;
 
}
