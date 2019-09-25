<?php

namespace DFSClient\Models\MerchantApi\Google_Shopping;

use DFSClient\Models\AbstractModel;

class SettingGoogleShoppingShopsTasks extends AbstractModel
{
    protected $requestToFunction = 'merchant_google_shopping_shops_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
