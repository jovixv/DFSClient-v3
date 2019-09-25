<?php

namespace DFSClient\Models\MerchantApi\Amazon;

use DFSClient\Models\AbstractModel;

class SettingAmazonAsinTasks extends AbstractModel
{
    protected $requestToFunction = 'merchant_amazon_asin_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
