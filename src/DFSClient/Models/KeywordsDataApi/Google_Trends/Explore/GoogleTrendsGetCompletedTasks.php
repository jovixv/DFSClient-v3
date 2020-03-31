<?php


namespace DFSClientV3\Models\KeywordsDataApi\Google_Trends\Explore;


use DFSClientV3\Models\AbstractModel;

class GoogleTrendsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/google_trends/explore/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleTrendsGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleTrendsGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}