<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataGoogle;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataTasks_ready;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataCategories;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataLanguages;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataLocations;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataGoogle_trends;

class UserEntityMainTasksResultPriceKeywords_data 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataGoogle $google;
    */
    public $google = null;

    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataTasks_ready $tasks_ready;
    */
    public $tasks_ready = null;

    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataCategories $categories;
    */
    public $categories = null;

    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataLanguages $languages;
    */
    public $languages = null;

    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataLocations $locations;
    */
    public $locations = null;

    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataGoogle_trends $google_trends;
    */
    public $google_trends = null;
 
}