<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesDirect;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesDisplay_ad;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesMail;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesMobile_apps;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesReferral_destination;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesReferring;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesSearch_ad;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesSearch_organic;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSourcesSocial;

class SimilarwebLiveEntityMainTasksResultTrafficSources
{
    /**
     * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesDirect;
     */
    public $direct = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesSearch_organic;
     */
    public $search_organic = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesSearch_ad;
     */
    public $search_ad = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesReferring;
     */
    public $referring = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesReferral_destination;
     */
    public $referral_destination = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesSocial;
     */
    public $social = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesDisplay_ad;
     */
    public $display_ad = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesMobile_apps;
     */
    public $mobile_apps = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultTrafficSourcesMail;
     */
    public $mail = null;
}
