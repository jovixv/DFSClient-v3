<?php

namespace DFSClientV3\Models\KeywordsDataApi\Google_Trends\Explore;

use DFSClientV3\Entity\Custom\GoogleTrendsGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleTrendsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/google_trends/explore/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return GoogleTrendsGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): GoogleTrendsGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
