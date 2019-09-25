<?php

namespace DFSClient\Models\KeywordsDataApi\Keywords_For_Domain;

use DFSClient\Models\AbstractModel;

class KeywordsForDomainLiveSetTask extends AbstractModel
{
    protected $requestToFunction = 'kwrd_for_domain_tasks_post';
    protected $pathToMainData    = 'results';
    protected $method            = 'POST';
    protected $isSupportedMerge  = true;
}