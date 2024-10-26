<?php

namespace DFSClientV3\Models\ContentAnalysisApi;

use DFSClientV3\Entity\Custom\ContentAnalysisLanguagesEntityMain;
use DFSClientV3\Models\AbstractModel;

class ContentAnalysisLanguages extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'content_analysis/languages';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return ContentAnalysisLanguagesEntityMain
     */
    #[\Override]
    public function get(): ContentAnalysisLanguagesEntityMain
    {
        return parent::get();
    }
}
