<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteKeywords_dataGoogle;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteKeywords_dataGoogle_trends;

class UserEntityMainTasksResultRatesStatisticsMinuteKeywords_data
{
    /**
     * @var null|integer;
     */
    public $categories = null;

    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsMinuteKeywords_dataGoogle;
     */
    public $google = null;

    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsMinuteKeywords_dataGoogle_trends;
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
