<?php


namespace DFSClientV3\Models\BusinessDataApi\Tripadvisor\Search;


use DFSClientV3\Models\AbstractModel;

class TripadvisorSearchGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'business_data/tripadvisor/search/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\TripadvisorSearchGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\TripadvisorSearchGetCompletedTasksEntityMain
    {
        return parent::get();
    }

}
