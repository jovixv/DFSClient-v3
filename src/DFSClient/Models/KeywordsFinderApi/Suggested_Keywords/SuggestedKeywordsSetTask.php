<?php

namespace DFSClient\Models\KeywordsFinderApi\Suggested_Keywords;

use DFSClient\Models\AbstractModel;

class SuggestedKeywordsSetTask extends AbstractModel
{
    protected $requestToFunction = 'kwrd_finder_suggest_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
