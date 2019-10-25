<?php

namespace DFSClientV3\Models\SERP_API;

use DFSClientV3\Models\AbstractModel;

class SettingSerpHtmlTasks extends AbstractModel
{
    protected $requestToFunction = 'srp_html_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
