<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultAudience;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultCategory_rank;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultCountry_rank;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultEmployees;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultGlobal_rank;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultHeadquarters;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultRevenue;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultSites;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTraffic;

class SimilarwebLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $site_url = null;

    /**
     * @var null|string;
     */
    public $company_name = null;

    /**
     * @var null|string;
     */
    public $site_description = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultGlobal_rank;
     */
    public $global_rank = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultCountry_rank;
     */
    public $country_rank = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultCategory_rank;
     */
    public $category_rank = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultHeadquarters;
     */
    public $headquarters = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultRevenue;
     */
    public $revenue = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultEmployees;
     */
    public $employees = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultAudience;
     */
    public $audience = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultTraffic;
     */
    public $traffic = null;

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultSites;
     */
    public $sites = null;

    /**
     * @var null|string;
     */
    public $date = null;
}
