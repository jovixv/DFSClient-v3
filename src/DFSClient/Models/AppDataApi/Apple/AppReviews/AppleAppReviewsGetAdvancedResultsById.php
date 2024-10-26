<?php

namespace DFSClientV3\Models\AppDataApi\Apple\AppReviews;

use DFSClientV3\Entity\Custom\AppleAppReviewsGetAdvancedResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class AppleAppReviewsGetAdvancedResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'app_data/apple/app_reviews/task_get/advanced/{$taskUUID}';

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
     * @return AppleAppReviewsGetAdvancedResultsByIdEntityMain
     */
    #[\Override]
    public function get(): AppleAppReviewsGetAdvancedResultsByIdEntityMain
    {
        return parent::get();
    }
}
