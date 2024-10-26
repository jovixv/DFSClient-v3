<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveAdvanced;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveHtml;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveRegular;

class UserEntityMainTasksResultPriceSerpLive
{
    /**
     * @var null|UserEntityMainTasksResultPriceSerpLiveHtml;
     */
    public $html = null;

    /**
     * @var null|UserEntityMainTasksResultPriceSerpLiveRegular;
     */
    public $regular = null;

    /**
     * @var null|UserEntityMainTasksResultPriceSerpLiveAdvanced;
     */
    public $advanced = null;
}
