<?php

namespace DFSClientV3\Models\BusinessDataApi\Google\ExtendedReviews;

use DFSClientV3\Models\AbstractModel;

class GoogleExtendedReviewsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'business_data/google/extended_reviews/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleExtendedReviewsGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleExtendedReviewsGetCompletedTasksEntityMain
    {
        return parent::get();
    }

}
