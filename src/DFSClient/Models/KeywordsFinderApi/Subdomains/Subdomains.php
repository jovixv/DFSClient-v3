<?php

namespace DFSClientV3\Models\KeywordsFinderApi\Subdomains;

use DFSClientV3\Models\AbstractModel;

class Subdomains extends AbstractModel
{
    protected $requestToFunction = 'kwrd_finder_subdomains_get';
    protected $pathToMainData = 'results->0->subdomains';
    protected $method = 'POST';
    protected $isSupportedMerge = false;
}
