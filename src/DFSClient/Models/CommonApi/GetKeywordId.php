<?php

namespace DFSClientV3\Models\CommonApi;

use DFSClientV3\Models\AbstractModel;

class GetKeywordId extends AbstractModel
{
    protected $requestToFunction = 'cmn_key_id';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
