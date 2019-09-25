<?php

namespace DFSClient\Models\OnPageApi;

use DFSClient\Models\AbstractModel;

class GetPages extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_get_pages';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
