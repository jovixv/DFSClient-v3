<?php

namespace DFSClientV3\Models\MerchantApi\Google\Products;

use DFSClientV3\Entity\Custom\GoogleProductsGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleProductsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'merchant/google/products/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleProductsGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): GoogleProductsGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
