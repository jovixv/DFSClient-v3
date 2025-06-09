<?php


namespace DFSClientV3\Models\BusinessDataApi\Trustpilot\Search;


use DFSClientV3\Models\AbstractModel;

class TrustpilotSearchGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'business_data/trustpilot/search/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\TrustpilotSearchGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\TrustpilotSearchGetCompletedTasksEntityMain
    {
        return parent::get();
    }

}
