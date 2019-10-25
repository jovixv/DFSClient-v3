<?php

namespace DFSClientV3\Models\KeywordsDataApi\Search_Volume_for_Keyword;

use DFSClientV3\Models\AbstractModel;

class SearchVolumeForKeywordGetCompletedTasks extends AbstractModel
{
    protected $requestToFunction = 'kwrd_sv_tasks_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
