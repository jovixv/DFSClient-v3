<?php

namespace DFSClient\Models\MerchantApi\Google_Shopping;

use DFSClient\Models\AbstractModel;

class GetGoogleShoppingCompletedTasks extends AbstractModel
{
    protected $requestToFunction = 'merchant_google_shopping_tasks_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
