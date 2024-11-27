<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultGlobal_rank;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultCountry_rank;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultCategory_rank;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultHeadquarters;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultRevenue;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultEmployees;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultAudience;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTraffic;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultSites;

#[\AllowDynamicProperties]
class SimilarwebGetResultsByIdEntityMainTasksResult 
{    
    /**
    * @var null|string $site_url;
    */
    public $site_url = null;

    /**
    * @var null|string $company_name;
    */
    public $company_name = null;

    /**
    * @var null|string $site_description;
    */
    public $site_description = null;

    /**
    * @var null|SimilarwebGetResultsByIdEntityMainTasksResultGlobal_rank $global_rank;
    */
    public $global_rank = null;

    /**
    * @var null|SimilarwebGetResultsByIdEntityMainTasksResultCountry_rank $country_rank;
    */
    public $country_rank = null;

    /**
    * @var null|SimilarwebGetResultsByIdEntityMainTasksResultCategory_rank $category_rank;
    */
    public $category_rank = null;

    /**
    * @var null|SimilarwebGetResultsByIdEntityMainTasksResultHeadquarters $headquarters;
    */
    public $headquarters = null;

    /**
    * @var null|SimilarwebGetResultsByIdEntityMainTasksResultRevenue $revenue;
    */
    public $revenue = null;

    /**
    * @var null|SimilarwebGetResultsByIdEntityMainTasksResultEmployees $employees;
    */
    public $employees = null;

    /**
    * @var null|SimilarwebGetResultsByIdEntityMainTasksResultAudience $audience;
    */
    public $audience = null;

    /**
    * @var null|SimilarwebGetResultsByIdEntityMainTasksResultTraffic $traffic;
    */
    public $traffic = null;

    /**
    * @var null|SimilarwebGetResultsByIdEntityMainTasksResultSites $sites;
    */
    public $sites = null;

    /**
    * @var null|string $date;
    */
    public $date = null;
 
}