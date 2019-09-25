<?php

namespace DFSClient\Models\MerchantApi\Amazon;

use DFSClient\Models\AbstractModel;

class SettingAmazonHtmlTasks extends AbstractModel
{
    protected $requestToFunction = 'merchant_amazon_html_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
