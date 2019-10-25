<?php

namespace DFSClientV3\Models\CommonApi;

use DFSClientV3\Models\AbstractModel;

class ListOfSearchEngines extends AbstractModel
{
    protected $requestToFunction = 'cmn_se';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
