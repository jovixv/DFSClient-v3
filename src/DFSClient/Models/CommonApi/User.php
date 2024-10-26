<?php

namespace DFSClientV3\Models\CommonApi;

use DFSClientV3\Entity\Custom\UserEntityMain;
use DFSClientV3\Models\AbstractModel;

class User extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'appendix/user_data';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return UserEntityMain
     */
    #[\Override]
    public function get(): UserEntityMain
    {
        return parent::get();
    }
}
