<?php

namespace DFSClientV3\Models\AppDataApi\Google\AppReviews;

use DFSClientV3\Entity\Custom\GoogleAppReviewsGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleAppReviewsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'app_data/google/app_reviews/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleAppReviewsGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): GoogleAppReviewsGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
