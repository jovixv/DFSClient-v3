<?php

namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Models\AbstractModel;

class GetHTagsOnPage extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_htags_on_page';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
