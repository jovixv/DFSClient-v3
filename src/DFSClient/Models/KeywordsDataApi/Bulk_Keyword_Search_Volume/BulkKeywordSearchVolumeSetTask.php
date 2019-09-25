<?php

namespace DFSClient\Models\KeywordsDataApi\Bulk_Keyword_Search_Volume;

use DFSClient\Models\AbstractModel;

class BulkKeywordSearchVolumeSetTask extends AbstractModel
{
    protected $requestToFunction = 'kwrd_sv_batch_tasks_post';
    protected $pathToMainData    = 'results';
    protected $method            = 'POST';
    protected $isSupportedMerge  = true;
}