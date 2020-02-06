<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesDirect;
use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesSearch_organic;
use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesSearch_ad;
use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesReferring;
use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesReferral_destination;
use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesSocial;
use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesMobile_apps;
use DFSClientV3\Entity\Custom\GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesMail;

class GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSources 
{    
    /**
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesDirect $direct;
    */
    public $direct = null;

    /**
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesSearch_organic $search_organic;
    */
    public $search_organic = null;

    /**
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesSearch_ad $search_ad;
    */
    public $search_ad = null;

    /**
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesReferring $referring;
    */
    public $referring = null;

    /**
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesReferral_destination $referral_destination;
    */
    public $referral_destination = null;

    /**
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesSocial $social;
    */
    public $social = null;

    /**
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesMobile_apps $mobile_apps;
    */
    public $mobile_apps = null;

    /**
    * @var null|GetTrafficAnalyticsResultsByIdModelEntityMainTasksResultTrafficSourcesMail $mail;
    */
    public $mail = null;
 
}