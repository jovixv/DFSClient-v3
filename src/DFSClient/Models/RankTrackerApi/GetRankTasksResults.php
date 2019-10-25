<?php

namespace DFSClientV3\Models\RankTrackerApi;

use DFSClientV3\Models\AbstractModel;

class GetRankTasksResults extends AbstractModel
{
    protected $requestToFunction = 'rnk_tasks_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = true;
}
