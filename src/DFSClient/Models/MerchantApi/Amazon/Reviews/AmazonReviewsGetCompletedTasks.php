<?php

namespace DFSClientV3\Models\MerchantApi\Amazon\Reviews;

use DFSClientV3\Entity\Custom\AmazonReviewsGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class AmazonReviewsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'merchant/amazon/reviews/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return AmazonReviewsGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): AmazonReviewsGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
