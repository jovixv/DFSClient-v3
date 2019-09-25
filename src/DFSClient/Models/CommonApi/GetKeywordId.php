<?php

namespace DFSClient\Models\CommonApi;

use DFSClient\Models\AbstractModel;

class GetKeywordId extends AbstractModel
{
    protected $requestToFunction = 'cmn_key_id';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
