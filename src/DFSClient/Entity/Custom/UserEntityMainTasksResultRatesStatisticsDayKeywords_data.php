<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayKeywords_dataGoogle;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayKeywords_dataGoogle_trends;

class UserEntityMainTasksResultRatesStatisticsDayKeywords_data
{
    /**
     * @var null|integer;
     */
    public $categories = null;

    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsDayKeywords_dataGoogle;
     */
    public $google = null;

    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsDayKeywords_dataGoogle_trends;
     */
    public $google_trends = null;

    /**
     * @var null|integer;
     */
    public $languages = null;

    /**
     * @var null|integer;
     */
    public $locations = null;

    /**
     * @var null|integer;
     */
    public $tasks_ready = null;
}
