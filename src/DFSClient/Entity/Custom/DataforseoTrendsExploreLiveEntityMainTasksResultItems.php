<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DataforseoTrendsExploreLiveEntityMainTasksResultItemsData;

#[\AllowDynamicProperties]
class DataforseoTrendsExploreLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|integer $position;
    */
    public $position = null;

    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|array $keywords;
    */
    public $keywords = null;

    /**
    * @var array|DataforseoTrendsExploreLiveEntityMainTasksResultItemsData[] $data;
    */
    public $data = [];

    /**
    * @var null|array $averages;
    */
    public $averages = null;
 
}