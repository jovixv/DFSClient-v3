<?php

namespace DFSClientV3\Models\MerchantApi\Amazon;

use DFSClientV3\Models\AbstractModel;

class GetAmazonHtmlCompletedTasks extends AbstractModel
{
    protected $requestToFunction = 'merchant_amazon_html_tasks_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
