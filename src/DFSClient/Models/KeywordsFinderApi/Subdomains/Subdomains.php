<?php

namespace DFSClient\Models\KeywordsFinderApi\Subdomains;

use DFSClient\Models\AbstractModel;

class Subdomains extends AbstractModel
{
    protected $requestToFunction = 'kwrd_finder_subdomains_get';
    protected $pathToMainData = 'results->0->subdomains';
    protected $method = 'POST';
    protected $isSupportedMerge = false;
}
