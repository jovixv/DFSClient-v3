<?php


namespace DFSClientV3\Models\BacklinksApi;


use DFSClientV3\Models\AbstractModel;

class BackLinksAvailableFilters extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'backlinks/available_filters';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMain
    {
        return parent::get();
    }
}
