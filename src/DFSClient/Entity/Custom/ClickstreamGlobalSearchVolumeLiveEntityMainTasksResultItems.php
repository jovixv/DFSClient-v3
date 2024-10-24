<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ClickstreamGlobalSearchVolumeLiveEntityMainTasksResultItemsCountry_distribution;

class ClickstreamGlobalSearchVolumeLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $keyword = null;

    /**
     * @var null|integer;
     */
    public $search_volume = null;

    /**
     * @var array|ClickstreamGlobalSearchVolumeLiveEntityMainTasksResultItemsCountry_distribution[];
     */
    public $country_distribution = [];
}
