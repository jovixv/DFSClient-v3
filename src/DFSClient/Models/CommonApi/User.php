<?php

namespace DFSClient\Models\CommonApi;

use DFSClient\Models\AbstractModel;

class User extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'common/user';
    protected $resultShouldBeTransformedToArray = true;


    /**
     * @return \DFSClient\Entity\Custom\UserEntityMain
     */
    public function get(): \DFSClient\Entity\Custom\UserEntityMain
    {
        return parent::get();
    }

}
