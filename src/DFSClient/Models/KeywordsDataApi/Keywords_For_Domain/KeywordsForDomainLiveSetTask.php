<?php

namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Domain;

use DFSClientV3\Models\AbstractModel;

class KeywordsForDomainLiveSetTask extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/keywords_for_site/task_post';
    protected $resultShouldBeTransformedToArray = true;
}
