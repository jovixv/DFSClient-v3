<?php


namespace DFSClientV3\Models\DomainAnalyticsApi\Technologies;


use DFSClientV3\Models\AbstractModel;

class TechnologiesAvailableFilters extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'domain_analytics/technologies/available_filters';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\TechnologiesAvailableFiltersEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\TechnologiesAvailableFiltersEntityMain
    {
        return parent::get();
    }
}
