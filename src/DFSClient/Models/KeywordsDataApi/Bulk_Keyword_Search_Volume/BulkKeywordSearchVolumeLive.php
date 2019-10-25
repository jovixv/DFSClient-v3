<?php

namespace DFSClientV3\Models\KeywordsDataApi\Bulk_Keyword_Search_Volume;

use DFSClientV3\Models\AbstractModel;

class BulkKeywordSearchVolumeLive extends AbstractModel
{
    protected $requestToFunction = 'kwrd_sv_batch';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = false;
}
