<?php


namespace DFSClient\Models\KeywordsDataApi\Keywords_For_Keyword;


use DFSClient\Models\AbstractModel;

class KeywordsForKeywordLiveSetTask extends AbstractModel
{
    protected $requestToFunction = 'kwrd_for_keywords_tasks_post';
    protected $pathToMainData    = 'results';
    protected $method            = 'POST';
    protected $isSupportedMerge  = true;
}