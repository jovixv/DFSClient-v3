<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GooglePageIntersectionLiveEntityMainTasksResultItemsKeyword_dataClickstream_keyword_infoGender_distribution;
use DFSClientV3\Entity\Custom\GooglePageIntersectionLiveEntityMainTasksResultItemsKeyword_dataClickstream_keyword_infoAge_distribution;
use DFSClientV3\Entity\Custom\GooglePageIntersectionLiveEntityMainTasksResultItemsKeyword_dataClickstream_keyword_infoMonthly_searches;

#[\AllowDynamicProperties]
class GooglePageIntersectionLiveEntityMainTasksResultItemsKeyword_dataClickstream_keyword_info 
{    
    /**
    * @var null|integer $search_volume;
    */
    public $search_volume = null;

    /**
    * @var null|string $last_updated_time;
    */
    public $last_updated_time = null;

    /**
    * @var null|GooglePageIntersectionLiveEntityMainTasksResultItemsKeyword_dataClickstream_keyword_infoGender_distribution $gender_distribution;
    */
    public $gender_distribution = null;

    /**
    * @var null|GooglePageIntersectionLiveEntityMainTasksResultItemsKeyword_dataClickstream_keyword_infoAge_distribution $age_distribution;
    */
    public $age_distribution = null;

    /**
    * @var array|GooglePageIntersectionLiveEntityMainTasksResultItemsKeyword_dataClickstream_keyword_infoMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];
 
}