<?php

namespace DFSClient\Models\KeywordsDataApi\Keywords_For_Domain;

use DFSClient\Models\AbstractModel;

class KeywordsForDomainLiveGetResultsByTaskId extends AbstractModel
{
    protected $requestToFunction = 'kwrd_for_domain_tasks_get';
    protected $pathToMainData    = 'results';
    protected $method            = 'GET';
    protected $isSupportedMerge  =  false;
}