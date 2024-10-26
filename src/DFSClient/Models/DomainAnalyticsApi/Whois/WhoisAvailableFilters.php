<?php

namespace DFSClientV3\Models\DomainAnalyticsApi\Whois;

use DFSClientV3\Entity\Custom\WhoisAvailableFiltersEntityMain;
use DFSClientV3\Models\AbstractModel;

class WhoisAvailableFilters extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'domain_analytics/whois/available_filters';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @return WhoisAvailableFiltersEntityMain
     */
    #[\Override]
    public function get(): WhoisAvailableFiltersEntityMain
    {
        return parent::get();
    }
}
