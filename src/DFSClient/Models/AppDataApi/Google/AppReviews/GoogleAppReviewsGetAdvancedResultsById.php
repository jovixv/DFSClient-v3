<?php

namespace DFSClientV3\Models\AppDataApi\Google\AppReviews;

use DFSClientV3\Entity\Custom\GoogleAppReviewsGetAdvancedResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleAppReviewsGetAdvancedResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'app_data/google/app_reviews/task_get/advanced/{$taskUUID}';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $taskUUID
     *
     * @return $this
     */
    public function setTaskId(string $taskUUID)
    {
        $this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);

        return $this;
    }

    /**
     * @return GoogleAppReviewsGetAdvancedResultsByIdEntityMain
     */
    #[\Override]
    public function get(): GoogleAppReviewsGetAdvancedResultsByIdEntityMain
    {
        return parent::get();
    }
}
