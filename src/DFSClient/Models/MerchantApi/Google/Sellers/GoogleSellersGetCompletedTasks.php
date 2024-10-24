<?php

namespace DFSClientV3\Models\MerchantApi\Google\Sellers;

use DFSClientV3\Entity\Custom\GoogleSellersGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleSellersGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'merchant/google/sellers/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleSellersGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): GoogleSellersGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
