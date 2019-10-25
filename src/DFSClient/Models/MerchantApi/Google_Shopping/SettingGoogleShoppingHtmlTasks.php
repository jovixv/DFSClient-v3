<?php

namespace DFSClientV3\Models\MerchantApi\Google_Shopping;

use DFSClientV3\Models\AbstractModel;

class SettingGoogleShoppingHtmlTasks extends AbstractModel
{
    protected $requestToFunction = 'merchant_google_shopping_html_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
