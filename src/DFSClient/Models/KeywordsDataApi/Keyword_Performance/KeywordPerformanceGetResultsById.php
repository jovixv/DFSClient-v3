<?php

namespace DFSClientV3\Models\KeywordsDataApi\Keyword_Performance;

use DFSClientV3\Entity\Custom\KeywordPerformanceGetResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class KeywordPerformanceGetResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/keyword_performance/task_get/{$taskUUID}';

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
     * @return KeywordPerformanceGetResultsByIdEntityMain
     */
    #[\Override]
    public function get(): KeywordPerformanceGetResultsByIdEntityMain
    {
        return parent::get();
    }
}
