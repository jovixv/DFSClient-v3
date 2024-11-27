<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesDirect;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesSearch_organic;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesSearch_ad;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesReferring;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesReferral_destination;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesSocial;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesDisplay_ad;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesMobile_apps;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesMail;

#[\AllowDynamicProperties]
class SimilarwebLiveEntityMainTasksResultTrafficSources 
{    
    /**
    * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesDirect $direct;
    */
    public $direct = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesSearch_organic $search_organic;
    */
    public $search_organic = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesSearch_ad $search_ad;
    */
    public $search_ad = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesReferring $referring;
    */
    public $referring = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesReferral_destination $referral_destination;
    */
    public $referral_destination = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesSocial $social;
    */
    public $social = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesDisplay_ad $display_ad;
    */
    public $display_ad = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesMobile_apps $mobile_apps;
    */
    public $mobile_apps = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesMail $mail;
    */
    public $mail = null;
 
}