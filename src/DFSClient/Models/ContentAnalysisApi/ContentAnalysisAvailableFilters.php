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

    /**
     *return \DFSClientV3\Entity\Custom\ContentAnalysisCategoriesEntityMain
     */
    public function get() {
    //: \DFSClientV3\Entity\Custom\ContentAnalysisCategoriesEntityMain {
        return parent::get();
    }
}
