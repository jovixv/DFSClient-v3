<?php

namespace DFSClientV3\Models\CommonApi;

use DFSClientV3\Models\AbstractModel;

class Errors extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'appendix/errors';
    protected $resultShouldBeTransformedToArray = true;


    /**
     * @return \DFSClientV3\Entity\Custom\ErrorsEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\ErrorsEntityMain
    {
        return parent::get();
    }

}
