<?php

namespace DFSClientV3\Models\MerchantApi\Google\Reviews;

use DFSClientV3\Entity\Custom\GoogleReviewsGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleReviewsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'merchant/google/reviews/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return GoogleReviewsGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): GoogleReviewsGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
