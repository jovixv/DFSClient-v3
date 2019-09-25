<?php

namespace DFSClient\Models\MerchantApi\Amazon;

use DFSClient\Models\AbstractModel;

class SettingAmazonTasks extends AbstractModel
{
    protected $requestToFunction = 'merchant_amazon_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
