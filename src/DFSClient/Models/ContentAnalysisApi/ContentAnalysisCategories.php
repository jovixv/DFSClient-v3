<?php

namespace DFSClientV3\Models\ContentAnalysisApi;

use DFSClientV3\Entity\Custom\ContentAnalysisCategoriesEntityMain;
use DFSClientV3\Models\AbstractModel;

class ContentAnalysisCategories extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'content_analysis/categories';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return ContentAnalysisCategoriesEntityMain
     */
    #[\Override]
    public function get(): ContentAnalysisCategoriesEntityMain
    {
        return parent::get();
    }
}
