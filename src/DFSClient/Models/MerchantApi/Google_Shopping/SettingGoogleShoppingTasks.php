<?php

namespace DFSClient\Models\MerchantApi\Google_Shopping;

use DFSClient\Models\AbstractModel;

class SettingGoogleShoppingTasks extends AbstractModel
{
    protected $requestToFunction = 'merchant_google_shopping_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
