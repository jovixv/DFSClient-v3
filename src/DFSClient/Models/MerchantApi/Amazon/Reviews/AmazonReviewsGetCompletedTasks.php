<?php

namespace DFSClientV3\Models\MerchantApi\Amazon\Reviews;


use DFSClientV3\Models\AbstractModel;

class AmazonReviewsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->0->result';
    protected $requestToFunction = 'merchant/amazon/reviews/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\AmazonReviewsGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\AmazonReviewsGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
