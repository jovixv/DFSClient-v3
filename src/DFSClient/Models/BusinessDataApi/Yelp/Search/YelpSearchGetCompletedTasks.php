<?php


namespace DFSClientV3\Models\BusinessDataApi\Yelp\Search;


use DFSClientV3\Models\AbstractModel;

class YelpSearchGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'business_data/yelp/search/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\YelpSearchGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\YelpSearchGetCompletedTasksEntityMain
    {
        return parent::get();
    }

}
