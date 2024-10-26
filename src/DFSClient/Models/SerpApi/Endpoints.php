<?php

namespace DFSClientV3\Models\SerpApi;

use DFSClientV3\Entity\Custom\EndpointsModelEntityMain;
use DFSClientV3\Models\AbstractModel;

class Endpoints extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'serp/endpoints';

    protected $resultShouldBeTransformedToArray = true;

    #[\Override]
    public function get(): EndpointsModelEntityMain
    {
        return parent::get();
    }
}
