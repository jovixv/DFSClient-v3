<?php

namespace DFSClient\Models\OnPageApi;

use DFSClient\Models\AbstractModel;

class GetImagesOnPage extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_images_on_page';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
