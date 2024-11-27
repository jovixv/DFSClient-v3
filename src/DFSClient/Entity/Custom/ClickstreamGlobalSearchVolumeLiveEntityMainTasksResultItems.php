<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ClickstreamGlobalSearchVolumeLiveEntityMainTasksResultItemsCountry_distribution;

#[\AllowDynamicProperties]
class ClickstreamGlobalSearchVolumeLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|integer $search_volume;
    */
    public $search_volume = null;

    /**
    * @var array|ClickstreamGlobalSearchVolumeLiveEntityMainTasksResultItemsCountry_distribution[] $country_distribution;
    */
    public $country_distribution = [];
 
}