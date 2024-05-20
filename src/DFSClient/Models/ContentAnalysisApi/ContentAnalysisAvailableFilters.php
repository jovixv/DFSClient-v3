<?php


namespace DFSClientV3\Models\ContentAnalysisApi;

use DFSClientV3\Models\AbstractModel;

class ContentAnalysisAvailableFilters extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'content_analysis/available_filters';
    protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

    /**
     * @return \DFSClientV3\Entity\Custom\ContentAnalysisAvailableFiltersEntityMain
     */
    public function get() : \DFSClientV3\Entity\Custom\ContentAnalysisAvailableFiltersEntityMain {
        return parent::get();
    }
}
