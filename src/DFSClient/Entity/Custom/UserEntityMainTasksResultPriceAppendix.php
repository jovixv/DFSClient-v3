<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendixErrors;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendixUser_data;

class UserEntityMainTasksResultPriceAppendix
{
    /**
     * @var null|UserEntityMainTasksResultPriceAppendixErrors;
     */
    public $errors = null;

    /**
     * @var null|UserEntityMainTasksResultPriceAppendixUser_data;
     */
    public $user_data = null;
}
