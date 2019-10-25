<?php

namespace DFSClientV3\Models\MerchantApi\Amazon;

use DFSClientV3\Models\AbstractModel;

class SettingAmazonTasks extends AbstractModel
{
    protected $requestToFunction = 'merchant_amazon_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
