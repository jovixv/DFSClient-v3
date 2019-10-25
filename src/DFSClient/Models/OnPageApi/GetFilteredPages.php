<?php

namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Models\AbstractModel;

class GetFilteredPages extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_get_pages_filter';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = false;
}
