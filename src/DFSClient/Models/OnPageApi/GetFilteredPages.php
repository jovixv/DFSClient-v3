<?php

namespace DFSClient\Models\OnPageApi;

use DFSClient\Models\AbstractModel;

class GetFilteredPages extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_get_pages_filter';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = false;
}
