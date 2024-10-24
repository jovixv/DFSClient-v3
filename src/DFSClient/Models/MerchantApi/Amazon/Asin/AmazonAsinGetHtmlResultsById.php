<?php

namespace DFSClientV3\Models\MerchantApi\Amazon\Asin;

use DFSClientV3\Entity\Custom\AmazonAsinGetHtmlResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class AmazonAsinGetHtmlResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'merchant/amazon/asin/task_get/html/{$taskUUID}';

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
     * @return AmazonAsinGetHtmlResultsByIdEntityMain
     */
    #[\Override]
    public function get(): AmazonAsinGetHtmlResultsByIdEntityMain
    {
        return parent::get();
    }
}
