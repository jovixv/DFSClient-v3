<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsOrganic;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsPaid;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsLocal_pack;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsFeatured_snippet;

#[\AllowDynamicProperties]
class GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metrics 
{    
    /**
    * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsPaid $paid;
    */
    public $paid = null;

    /**
    * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsLocal_pack $local_pack;
    */
    public $local_pack = null;

    /**
    * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsFeatured_snippet $featured_snippet;
    */
    public $featured_snippet = null;
 
}