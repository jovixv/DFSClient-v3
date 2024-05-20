<?php


namespace DFSClientV3\Models\DomainAnalyticsApi\Whois;


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
     * @return \DFSClientV3\Entity\Custom\WhoisAvailableFiltersEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\WhoisAvailableFiltersEntityMain
    {
        return parent::get();
    }
}
