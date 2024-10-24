<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultAudience;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultCategory_rank;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultCountry_rank;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultEmployees;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultGlobal_rank;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultHeadquarters;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultRevenue;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultSites;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTraffic;

class SimilarwebGetResultsByIdEntityMainTasksResult
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
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultGlobal_rank;
     */
    public $global_rank = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultCountry_rank;
     */
    public $country_rank = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultCategory_rank;
     */
    public $category_rank = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultHeadquarters;
     */
    public $headquarters = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultRevenue;
     */
    public $revenue = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultEmployees;
     */
    public $employees = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultAudience;
     */
    public $audience = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultTraffic;
     */
    public $traffic = null;

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultSites;
     */
    public $sites = null;

    /**
     * @var null|string;
     */
    public $date = null;
}
