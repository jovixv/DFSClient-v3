<?php


namespace DFSClientV3\Models\BusinessDataApi\Trustpilot\Reviews;


use DFSClientV3\Models\AbstractModel;

class TrustpilotReviewsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'business_data/trustpilot/reviews/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\TrustpilotReviewsGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\TrustpilotReviewsGetCompletedTasksEntityMain
    {
        return parent::get();
    }

}
