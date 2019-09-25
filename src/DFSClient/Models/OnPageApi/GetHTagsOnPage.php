<?php

namespace DFSClient\Models\OnPageApi;

use DFSClient\Models\AbstractModel;

class GetHTagsOnPage extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_htags_on_page';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
