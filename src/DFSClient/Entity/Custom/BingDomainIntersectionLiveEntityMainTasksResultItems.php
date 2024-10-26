<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingDomainIntersectionLiveEntityMainTasksResultItemsFirst_domain_serp_element;
use DFSClientV3\Entity\Custom\BingDomainIntersectionLiveEntityMainTasksResultItemsKeyword_data;
use DFSClientV3\Entity\Custom\BingDomainIntersectionLiveEntityMainTasksResultItemsSecond_domain_serp_element;

class BingDomainIntersectionLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $se_type = null;

    /**
     * @var null|BingDomainIntersectionLiveEntityMainTasksResultItemsKeyword_data;
     */
    public $keyword_data = null;

    /**
     * @var null|BingDomainIntersectionLiveEntityMainTasksResultItemsFirst_domain_serp_element;
     */
    public $first_domain_serp_element = null;

    /**
     * @var null|BingDomainIntersectionLiveEntityMainTasksResultItemsSecond_domain_serp_element;
     */
    public $second_domain_serp_element = null;
}
