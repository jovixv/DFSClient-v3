<?php

namespace DFSClientV3\Models\MerchantApi\Google\ProductInfo;


use DFSClientV3\Models\AbstractModel;

class GoogleProductInfoGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->0->result';
    protected $requestToFunction = 'merchant/google/product_info/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleProductInfoGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleProductInfoGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
