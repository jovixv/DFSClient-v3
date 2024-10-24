<?php

namespace DFSClientV3\Models\MerchantApi\Amazon\Asin;

use DFSClientV3\Entity\Custom\AdsTrafficForKeywordsGetCompletedTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class AmazonAsinGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'merchant/amazon/asin/tasks_ready';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return AdsTrafficForKeywordsGetCompletedTasksEntityMain
     */
    #[\Override]
    public function get(): AdsTrafficForKeywordsGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
