<?php

namespace DFSClientV3\Models\KeywordsDataApi\Search_Volume_History;

use DFSClientV3\Models\AbstractModel;

class SearchVolumeHistoryGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/search_volume_history/tasks_ready';
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
     * @return \DFSClientV3\Entity\Custom\SearchVolumeHistoryGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\SearchVolumeHistoryGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
