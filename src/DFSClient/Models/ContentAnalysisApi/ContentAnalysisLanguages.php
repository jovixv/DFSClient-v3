<?php


namespace DFSClientV3\Models\ContentAnalysisApi;

use DFSClientV3\Models\AbstractModel;

class ContentAnalysisLanguages extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'content_analysis/languages';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\ContentAnalysisLanguagesEntityMain
     */
	public function get() : \DFSClientV3\Entity\Custom\ContentAnalysisLanguagesEntityMain {
        return parent::get();
    }
}
