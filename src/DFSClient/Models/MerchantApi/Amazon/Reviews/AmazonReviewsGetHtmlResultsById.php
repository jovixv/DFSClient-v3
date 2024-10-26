<?php

namespace DFSClientV3\Models\MerchantApi\Amazon\Reviews;

use DFSClientV3\Entity\Custom\AmazonReviewsGetHtmlResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class AmazonReviewsGetHtmlResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'merchant/amazon/reviews/task_get/html/{$taskUUID}';

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
     * @return AmazonReviewsGetHtmlResultsByIdEntityMain
     */
    #[\Override]
    public function get(): AmazonReviewsGetHtmlResultsByIdEntityMain
    {
        return parent::get();
    }
}
