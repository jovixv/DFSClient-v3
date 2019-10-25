<?php

namespace DFSClientV3\Models\SERP_API;

use DFSClientV3\Models\AbstractModel;

class SettingsExtraSerpTasks extends AbstractModel
{
    protected $requestToFunction = 'srp_extra_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
