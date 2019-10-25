<?php

namespace DFSClientV3\Models\CompetitorDataApi;

use DFSClientV3\Models\AbstractModel;

class CompetitorInfo extends AbstractModel
{
    protected $requestToFunction = 'cmp_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
