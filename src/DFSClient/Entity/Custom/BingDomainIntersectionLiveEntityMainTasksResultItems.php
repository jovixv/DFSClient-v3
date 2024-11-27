<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingDomainIntersectionLiveEntityMainTasksResultItemsKeyword_data;
use DFSClientV3\Entity\Custom\BingDomainIntersectionLiveEntityMainTasksResultItemsFirst_domain_serp_element;
use DFSClientV3\Entity\Custom\BingDomainIntersectionLiveEntityMainTasksResultItemsSecond_domain_serp_element;

#[\AllowDynamicProperties]
class BingDomainIntersectionLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|BingDomainIntersectionLiveEntityMainTasksResultItemsKeyword_data $keyword_data;
    */
    public $keyword_data = null;

    /**
    * @var null|BingDomainIntersectionLiveEntityMainTasksResultItemsFirst_domain_serp_element $first_domain_serp_element;
    */
    public $first_domain_serp_element = null;

    /**
    * @var null|BingDomainIntersectionLiveEntityMainTasksResultItemsSecond_domain_serp_element $second_domain_serp_element;
    */
    public $second_domain_serp_element = null;
 
}