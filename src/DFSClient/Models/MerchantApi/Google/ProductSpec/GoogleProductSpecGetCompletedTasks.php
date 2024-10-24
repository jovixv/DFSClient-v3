<?php

namespace DFSClientV3\Models\MerchantApi\Google\ProductSpec;

use DFSClientV3\Entity\Custom\GoogleProductSpecGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleProductSpecGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'merchant/google/product_spec/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleProductSpecGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): GoogleProductSpecGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
