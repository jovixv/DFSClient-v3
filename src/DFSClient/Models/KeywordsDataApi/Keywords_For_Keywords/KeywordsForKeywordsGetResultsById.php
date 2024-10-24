<?php

namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Keywords;

use DFSClientV3\Entity\Custom\KeywordsForKeywordsGetResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class KeywordsForKeywordsGetResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/keywords_for_keywords/task_get/{$taskUUID}';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    public function setTaskId(string $taskUUID)
    {
        $this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);

        return $this;
    }

    /**
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
     * @return KeywordsForKeywordsGetResultsByIdEntityMain
     */
    #[\Override]
    public function get(): KeywordsForKeywordsGetResultsByIdEntityMain
    {
        return parent::get();
    }
}
