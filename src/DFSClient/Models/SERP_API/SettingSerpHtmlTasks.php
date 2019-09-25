<?php

namespace DFSClient\Models\SERP_API;

use DFSClient\Models\AbstractModel;

class SettingSerpHtmlTasks extends AbstractModel
{
    protected $requestToFunction = 'srp_html_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
