<?php

namespace DFSClientV3\Models\KeywordsDataApi\Bulk_Keyword_Search_Volume;

use DFSClientV3\Models\AbstractModel;

class BulkKeywordSearchVolumeGetResultsByTaskId extends AbstractModel
{
    protected $requestToFunction = 'kwrd_sv_batch_tasks_get';
    protected $pathToMainData    = 'results';
    protected $method            = 'GET';
    protected $isSupportedMerge  = false;
}
