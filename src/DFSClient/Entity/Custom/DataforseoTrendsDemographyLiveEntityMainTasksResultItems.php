<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DataforseoTrendsDemographyLiveEntityMainTasksResultItemsDemography;
use DFSClientV3\Entity\Custom\DataforseoTrendsDemographyLiveEntityMainTasksResultItemsDemography_comparison;

class DataforseoTrendsDemographyLiveEntityMainTasksResultItems
{
    /**
     * @var null|integer;
     */
    public $position = null;

    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|array;
     */
    public $keywords = null;

    /**
     * @var null|DataforseoTrendsDemographyLiveEntityMainTasksResultItemsDemography;
     */
    public $demography = null;

    /**
     * @var null|DataforseoTrendsDemographyLiveEntityMainTasksResultItemsDemography_comparison;
     */
    public $demography_comparison = null;
}
