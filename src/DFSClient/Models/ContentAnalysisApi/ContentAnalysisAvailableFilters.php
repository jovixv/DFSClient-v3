<?php

namespace DFSClientV3\Models\ContentAnalysisApi;

use DFSClientV3\Entity\Custom\ContentAnalysisAvailableFiltersEntityMain;
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
     * @return ContentAnalysisAvailableFiltersEntityMain
     */
    #[\Override]
    public function get(): ContentAnalysisAvailableFiltersEntityMain
    {
        return parent::get();
    }
}
