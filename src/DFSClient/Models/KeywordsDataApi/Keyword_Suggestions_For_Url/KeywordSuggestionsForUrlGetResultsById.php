<?php

namespace DFSClientV3\Models\KeywordsDataApi\Keyword_Suggestions_For_Url;

use DFSClientV3\Entity\Custom\KeywordSuggestionsForUrlGetResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class KeywordSuggestionsForUrlGetResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/keyword_suggestions_for_url/task_get/{$taskUUID}';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @param string $taskUUID
     *
     * @return $this
     */
    public function setTaskId(string $taskUUID)
    {
        $this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);

        return $this;
    }

    /**
     * 'bing' only.
     *
     * @param string $seName
     *
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);

        return $this;
    }

    /**
     * @return KeywordSuggestionsForUrlGetResultsByIdEntityMain
     */
    #[\Override]
    public function get(): KeywordSuggestionsForUrlGetResultsByIdEntityMain
    {
        return parent::get();
    }
}
