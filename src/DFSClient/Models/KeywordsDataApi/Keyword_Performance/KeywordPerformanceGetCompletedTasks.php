<?php

namespace DFSClientV3\Models\KeywordsDataApi\Keyword_Performance;

use DFSClientV3\Models\AbstractModel;

class KeywordPerformanceGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/keyword_performance/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\KeywordPerformanceGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\KeywordPerformanceGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
