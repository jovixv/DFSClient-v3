<?php

namespace DFSClientV3\Models\KeywordsDataApi\Search_Volume;

use DFSClientV3\Models\AbstractModel;

class SearchVolumeForKeywordGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/search_volume/tasks_ready';
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
     * @return \DFSClientV3\Entity\Custom\SearchVolumeForKeywordGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\SearchVolumeForKeywordGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
