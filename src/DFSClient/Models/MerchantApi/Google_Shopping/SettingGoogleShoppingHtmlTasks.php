<?php

namespace DFSClient\Models\MerchantApi\Google_Shopping;

use DFSClient\Models\AbstractModel;

class SettingGoogleShoppingHtmlTasks extends AbstractModel
{
    protected $requestToFunction = 'merchant_google_shopping_html_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
