<?php

namespace DFSClientV3\Models\MerchantApi\Amazon\Products;


use DFSClientV3\Models\AbstractModel;

class AmazonProductsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->0->result';
    protected $requestToFunction = 'merchant/amazon/products/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\AmazonProductsGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\AmazonProductsGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
