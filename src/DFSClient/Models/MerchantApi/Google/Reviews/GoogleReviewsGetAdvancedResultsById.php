<?php

namespace DFSClientV3\Models\MerchantApi\Google\Reviews;

use DFSClientV3\Entity\Custom\GoogleReviewsGetAdvancedResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleReviewsGetAdvancedResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'merchant/google/reviews/task_get/advanced/{$taskUUID}';

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
     * @return GoogleReviewsGetAdvancedResultsByIdEntityMain
     */
    #[\Override]
    public function get(): GoogleReviewsGetAdvancedResultsByIdEntityMain
    {
        return parent::get();
    }
}
