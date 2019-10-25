<?php

namespace DFSClientV3\Models\MerchantApi\Amazon;

use DFSClientV3\Models\AbstractModel;

class SettingAmazonHtmlTasks extends AbstractModel
{
    protected $requestToFunction = 'merchant_amazon_html_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
