<?php

namespace DFSClientV3\Models\MerchantApi\Google\Reviews;


use DFSClientV3\Models\AbstractModel;

class GoogleReviewsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->0->result';
    protected $requestToFunction = 'merchant/google/reviews/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleReviewsGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleReviewsGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
