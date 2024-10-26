<?php

namespace DFSClientV3\Models\AppDataApi\Apple\AppReviews;

use DFSClientV3\Entity\Custom\AppleAppReviewsGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class AppleAppReviewsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'app_data/google/app_reviews/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return AppleAppReviewsGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): AppleAppReviewsGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
