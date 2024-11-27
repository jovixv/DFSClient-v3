<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceDataforseo_labsCompetitors_domainLivePriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceDataforseo_labsCompetitors_domainLivePriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceDataforseo_labsCompetitors_domainLivePriority_high;

#[\AllowDynamicProperties]
class UserEntityMainTasksResultPriceDataforseo_labsCompetitors_domainLive 
{    
    /**
    * array|UserEntityMainTasksResultPriceDataforseo_labsCompetitors_domainLivePriority_low[] $priority_low;
    */
    public $priority_low = [];

    /**
    * array|UserEntityMainTasksResultPriceDataforseo_labsCompetitors_domainLivePriority_normal[] $priority_normal;
    */
    public $priority_normal = [];

    /**
    * array|UserEntityMainTasksResultPriceDataforseo_labsCompetitors_domainLivePriority_high[] $priority_high;
    */
    public $priority_high = [];
 
}