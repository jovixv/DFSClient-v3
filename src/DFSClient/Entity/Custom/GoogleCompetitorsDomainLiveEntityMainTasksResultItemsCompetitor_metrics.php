<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsOrganic;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsPaid;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsLocal_pack;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsFeatured_snippet;

#[\AllowDynamicProperties]
class GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metrics 
{    
    /**
    * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsPaid $paid;
    */
    public $paid = null;

    /**
    * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsLocal_pack $local_pack;
    */
    public $local_pack = null;

    /**
    * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsFeatured_snippet $featured_snippet;
    */
    public $featured_snippet = null;
 
}