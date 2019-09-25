<?php

namespace DFSClient\Models\KeywordsDataApi\Bulk_Keyword_Search_Volume;

use DFSClient\Models\AbstractModel;

class BulkKeywordSearchVolumeGetResultsByTaskId extends AbstractModel
{
    protected $requestToFunction = 'kwrd_sv_batch_tasks_get';
    protected $pathToMainData    = 'results';
    protected $method            = 'GET';
    protected $isSupportedMerge  = false;
}