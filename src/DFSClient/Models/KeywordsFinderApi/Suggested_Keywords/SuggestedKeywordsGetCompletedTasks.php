<?php

namespace DFSClient\Models\KeywordsFinderApi\Suggested_Keywords;

use DFSClient\Models\AbstractModel;

class SuggestedKeywordsGetCompletedTasks extends AbstractModel
{
    protected $requestToFunction = 'kwrd_finder_suggest_tasks_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
