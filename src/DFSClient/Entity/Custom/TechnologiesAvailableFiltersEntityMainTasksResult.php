<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TechnologiesAvailableFiltersEntityMainTasksResultAggregation_technologies;
use DFSClientV3\Entity\Custom\TechnologiesAvailableFiltersEntityMainTasksResultDomains_by_technology;
use DFSClientV3\Entity\Custom\TechnologiesAvailableFiltersEntityMainTasksResultTechnologies_summary;

class TechnologiesAvailableFiltersEntityMainTasksResult
{
    /**
     * @var null|TechnologiesAvailableFiltersEntityMainTasksResultDomains_by_technology;
     */
    public $domains_by_technology = null;

    /**
     * @var null|TechnologiesAvailableFiltersEntityMainTasksResultAggregation_technologies;
     */
    public $aggregation_technologies = null;

    /**
     * @var null|TechnologiesAvailableFiltersEntityMainTasksResultTechnologies_summary;
     */
    public $technologies_summary = null;
}
