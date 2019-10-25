<?php

namespace DFSClientV3\Models\KeywordsDataApi\Bulk_Keyword_Search_Volume;

use DFSClientV3\Models\AbstractModel;

class BulkKeywordSearchVolumeSetTask extends AbstractModel
{
    protected $requestToFunction = 'kwrd_sv_batch_tasks_post';
    protected $pathToMainData    = 'results';
    protected $method            = 'POST';
    protected $isSupportedMerge  = true;
}
