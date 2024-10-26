<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataCategories;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataGoogle;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataGoogle_trends;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataLanguages;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataLocations;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataTasks_ready;

class UserEntityMainTasksResultPriceKeywords_data
{
    /**
     * @var null|UserEntityMainTasksResultPriceKeywords_dataGoogle;
     */
    public $google = null;

    /**
     * @var null|UserEntityMainTasksResultPriceKeywords_dataTasks_ready;
     */
    public $tasks_ready = null;

    /**
     * @var null|UserEntityMainTasksResultPriceKeywords_dataCategories;
     */
    public $categories = null;

    /**
     * @var null|UserEntityMainTasksResultPriceKeywords_dataLanguages;
     */
    public $languages = null;

    /**
     * @var null|UserEntityMainTasksResultPriceKeywords_dataLocations;
     */
    public $locations = null;

    /**
     * @var null|UserEntityMainTasksResultPriceKeywords_dataGoogle_trends;
     */
    public $google_trends = null;
}
