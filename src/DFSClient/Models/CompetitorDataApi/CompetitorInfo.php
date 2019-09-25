<?php

namespace DFSClient\Models\CompetitorDataApi;

use DFSClient\Models\AbstractModel;

class CompetitorInfo extends AbstractModel
{
    protected $requestToFunction = 'cmp_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
