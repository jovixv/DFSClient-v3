<?php

namespace DFSClientV3\Models\MerchantApi\Amazon\Sellers;

use DFSClientV3\Entity\Custom\AmazonSellersGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class AmazonSellersGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'merchant/amazon/sellers/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\AmazonSellersGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): AmazonSellersGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
