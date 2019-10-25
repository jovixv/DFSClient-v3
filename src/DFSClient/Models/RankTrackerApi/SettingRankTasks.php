<?php

namespace DFSClientV3\Models\RankTrackerApi;

use DFSClientV3\Models\AbstractModel;

class SettingRankTasks extends AbstractModel
{
    protected $requestToFunction = 'rnk_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
