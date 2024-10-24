<?php

namespace DFSClientV3\Models\MerchantApi\Google\Sellers;

use DFSClientV3\Entity\Custom\GoogleSellersGetHtmlResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleSellersGetHtmlResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'merchant/google/sellers/task_get/html/{$taskUUID}';

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
     * @return GoogleSellersGetHtmlResultsByIdEntityMain
     */
    #[\Override]
    public function get(): GoogleSellersGetHtmlResultsByIdEntityMain
    {
        return parent::get();
    }
}
