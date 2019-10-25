<?php


namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Domain;


use DFSClientV3\Models\AbstractModel;

class KeywordsForDomainLiveGetCompletedTasks extends AbstractModel
{
    protected $requestToFunction = 'kwrd_for_domain_tasks_get';
    protected $pathToMainData    = 'results';
    protected $method            = 'GET';
    protected $isSupportedMerge  =  false;
}
