<?php

namespace DFSClientV3\Models\MerchantApi\Google_Shopping;

use DFSClientV3\Models\AbstractModel;

class GetGoogleShoppingShopsResultsByTaskId extends AbstractModel
{
    protected $requestToFunction = 'merchant_google_shopping_shops_tasks_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
