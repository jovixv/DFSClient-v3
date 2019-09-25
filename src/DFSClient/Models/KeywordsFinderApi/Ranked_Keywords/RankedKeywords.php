<?php

namespace DFSClient\Models\KeywordsFinderApi\Ranked_Keywords;

use DFSClient\Models\AbstractModel;

class RankedKeywords extends AbstractModel
{
    protected $requestToFunction = 'kwrd_finder_ranked_keywords_get';
    protected $pathToMainData = 'results->0->ranked';
    protected $method = 'POST';
    protected $isSupportedMerge = false;
}
