<?php

namespace DFSClient\Models\OnPageApi;

use DFSClient\Models\AbstractModel;

class SettingTasks extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
