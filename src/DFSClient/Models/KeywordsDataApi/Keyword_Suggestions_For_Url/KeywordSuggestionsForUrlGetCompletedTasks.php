<?php

namespace DFSClientV3\Models\KeywordsDataApi\Keyword_Suggestions_For_Url;

use DFSClientV3\Models\AbstractModel;

class KeywordSuggestionsForUrlGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/keyword_suggestions_for_url/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * 'bing' only
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\KeywordSuggestionsForUrlGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\KeywordSuggestionsForUrlGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
