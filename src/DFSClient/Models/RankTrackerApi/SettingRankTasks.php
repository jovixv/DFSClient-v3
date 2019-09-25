<?php

namespace DFSClient\Models\RankTrackerApi;

use DFSClient\Models\AbstractModel;

class SettingRankTasks extends AbstractModel
{
    protected $requestToFunction = 'rnk_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
