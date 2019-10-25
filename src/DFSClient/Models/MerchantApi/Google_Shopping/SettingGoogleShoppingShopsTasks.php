<?php

namespace DFSClientV3\Models\MerchantApi\Google_Shopping;

use DFSClientV3\Models\AbstractModel;

class SettingGoogleShoppingShopsTasks extends AbstractModel
{
    protected $requestToFunction = 'merchant_google_shopping_shops_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
