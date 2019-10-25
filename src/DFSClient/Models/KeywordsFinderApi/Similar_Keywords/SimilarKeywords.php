<?php

namespace DFSClientV3\Models\KeywordsFinderApi\Similar_Keywords;

use DFSClientV3\Models\AbstractModel;

class SimilarKeywords extends AbstractModel
{
    protected $requestToFunction = 'kwrd_finder_similar_keywords_get';
    protected $pathToMainData = 'results->0->similar';
    protected $method = 'POST';
    protected $isSupportedMerge = false;
}
