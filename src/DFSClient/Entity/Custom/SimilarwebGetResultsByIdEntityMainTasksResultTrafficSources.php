<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesDirect;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesDisplay_ad;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesMail;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesMobile_apps;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesReferral_destination;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesReferring;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesSearch_ad;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesSearch_organic;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesSocial;

class SimilarwebGetResultsByIdEntityMainTasksResultTrafficSources
{
    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesDirect;
     */
    public $direct = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesSearch_organic;
     */
    public $search_organic = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesSearch_ad;
     */
    public $search_ad = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesReferring;
     */
    public $referring = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesReferral_destination;
     */
    public $referral_destination = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesSocial;
     */
    public $social = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesDisplay_ad;
     */
    public $display_ad = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesMobile_apps;
     */
    public $mobile_apps = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultTrafficSourcesMail;
     */
    public $mail = null;
}
