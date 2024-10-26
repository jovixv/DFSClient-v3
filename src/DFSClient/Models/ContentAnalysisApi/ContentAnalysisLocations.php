<?php

namespace DFSClientV3\Models\ContentAnalysisApi;

use DFSClientV3\Entity\Custom\ContentAnalysisLocationsEntityMain;
use DFSClientV3\Models\AbstractModel;

class ContentAnalysisLocations extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'content_analysis/locations';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return ContentAnalysisLocationsEntityMain
     */
    #[\Override]
    public function get(): ContentAnalysisLocationsEntityMain
    {
        return parent::get();
    }
}
