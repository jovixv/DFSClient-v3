<?php

namespace DFSClient\Models\MerchantApi\Amazon;

use DFSClient\Models\AbstractModel;

class GetAmazonHtmlCompletedTasks extends AbstractModel
{
    protected $requestToFunction = 'merchant_amazon_html_tasks_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
