<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteKeywords_dataGoogleAd_traffic_by_keywords;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteKeywords_dataGoogleAd_traffic_by_platforms;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteKeywords_dataGoogleKeywords_for_category;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteKeywords_dataGoogleKeywords_for_keywords;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteKeywords_dataGoogleKeywords_for_site;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteKeywords_dataGoogleSearch_volume;

class UserEntityMainTasksResultRatesLimitsMinuteKeywords_dataGoogle
{
    /**
     * @var null|UserEntityMainTasksResultRatesLimitsMinuteKeywords_dataGoogleAd_traffic_by_keywords;
     */
    public $ad_traffic_by_keywords = null;

    /**
     * @var null|UserEntityMainTasksResultRatesLimitsMinuteKeywords_dataGoogleAd_traffic_by_platforms;
     */
    public $ad_traffic_by_platforms = null;

    /**
     * @var null|integer;
     */
    public $adwords_status = null;

    /**
     * @var null|UserEntityMainTasksResultRatesLimitsMinuteKeywords_dataGoogleKeywords_for_category;
     */
    public $keywords_for_category = null;

    /**
     * @var null|UserEntityMainTasksResultRatesLimitsMinuteKeywords_dataGoogleKeywords_for_keywords;
     */
    public $keywords_for_keywords = null;

    /**
     * @var null|UserEntityMainTasksResultRatesLimitsMinuteKeywords_dataGoogleKeywords_for_site;
     */
    public $keywords_for_site = null;

    /**
     * @var null|UserEntityMainTasksResultRatesLimitsMinuteKeywords_dataGoogleSearch_volume;
     */
    public $search_volume = null;
}
