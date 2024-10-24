<?php

namespace DFSClientV3\Models\MerchantApi\Amazon\Products;

use DFSClientV3\Entity\Custom\AmazonProductsGetHtmlResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class AmazonProductsGetHtmlResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'merchant/amazon/products/task_get/html/{$taskUUID}';

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
     * @return AmazonProductsGetHtmlResultsByIdEntityMain
     */
    #[\Override]
    public function get(): AmazonProductsGetHtmlResultsByIdEntityMain
    {
        return parent::get();
    }
}
