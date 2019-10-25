<?php


namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Keyword;

use DFSClientV3\Models\AbstractModel;

class KeywordsForKeywordLiveGetCompletedTasks extends AbstractModel
{
    protected $requestToFunction = 'kwrd_for_keywords_tasks_get';
    protected $pathToMainData    = 'results';
    protected $method            = 'GET';
    protected $isSupportedMerge  =  false;
}
