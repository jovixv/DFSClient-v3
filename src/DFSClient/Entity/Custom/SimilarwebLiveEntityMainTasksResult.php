<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultGlobal_rank;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultCountry_rank;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultCategory_rank;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultHeadquarters;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultRevenue;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultEmployees;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultAudience;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTraffic;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultSites;

#[\AllowDynamicProperties]
class SimilarwebLiveEntityMainTasksResult 
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
    * @var null|SimilarwebLiveEntityMainTasksResultGlobal_rank $global_rank;
    */
    public $global_rank = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultCountry_rank $country_rank;
    */
    public $country_rank = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultCategory_rank $category_rank;
    */
    public $category_rank = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultHeadquarters $headquarters;
    */
    public $headquarters = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultRevenue $revenue;
    */
    public $revenue = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultEmployees $employees;
    */
    public $employees = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultAudience $audience;
    */
    public $audience = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultTraffic $traffic;
    */
    public $traffic = null;

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultSites $sites;
    */
    public $sites = null;

    /**
    * @var null|string $date;
    */
    public $date = null;
 
}