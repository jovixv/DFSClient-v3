<?php

namespace DFSClient\Models\CommonApi;

use DFSClient\Models\AbstractModel;

class ListOfSearchEngines extends AbstractModel
{
    protected $requestToFunction = 'cmn_se';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
