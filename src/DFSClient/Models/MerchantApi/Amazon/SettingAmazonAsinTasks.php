<?php

namespace DFSClientV3\Models\MerchantApi\Amazon;

use DFSClientV3\Models\AbstractModel;

class SettingAmazonAsinTasks extends AbstractModel
{
    protected $requestToFunction = 'merchant_amazon_asin_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
