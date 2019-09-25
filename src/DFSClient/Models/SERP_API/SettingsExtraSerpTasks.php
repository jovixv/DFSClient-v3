<?php

namespace DFSClient\Models\SERP_API;

use DFSClient\Models\AbstractModel;

class SettingsExtraSerpTasks extends AbstractModel
{
    protected $requestToFunction = 'srp_extra_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
