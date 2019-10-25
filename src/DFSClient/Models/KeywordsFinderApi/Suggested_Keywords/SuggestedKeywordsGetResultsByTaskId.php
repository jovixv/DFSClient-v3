<?php

namespace DFSClientV3\Models\KeywordsFinderApi\Suggested_Keywords;

use DFSClientV3\Models\AbstractModel;

class SuggestedKeywordsGetResultsByTaskId extends AbstractModel
{
    protected $requestToFunction = 'kwrd_finder_suggest_tasks_get';
    protected $pathToMainData = 'suggestions';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
