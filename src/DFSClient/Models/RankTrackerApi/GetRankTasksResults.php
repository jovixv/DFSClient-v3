<?php

namespace DFSClient\Models\RankTrackerApi;

use DFSClient\Models\AbstractModel;

class GetRankTasksResults extends AbstractModel
{
    protected $requestToFunction = 'rnk_tasks_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = true;
}
