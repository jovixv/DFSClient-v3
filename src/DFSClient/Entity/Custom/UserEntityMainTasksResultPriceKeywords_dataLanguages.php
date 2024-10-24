<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataLanguagesPriority_high;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataLanguagesPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataLanguagesPriority_normal;

class UserEntityMainTasksResultPriceKeywords_dataLanguages
{
    /**
     * array|UserEntityMainTasksResultPriceKeywords_dataLanguagesPriority_low[] $priority_low;.
     */
    public $priority_low = [];

    /**
     * array|UserEntityMainTasksResultPriceKeywords_dataLanguagesPriority_normal[] $priority_normal;.
     */
    public $priority_normal = [];

    /**
     * array|UserEntityMainTasksResultPriceKeywords_dataLanguagesPriority_high[] $priority_high;.
     */
    public $priority_high = [];
}
