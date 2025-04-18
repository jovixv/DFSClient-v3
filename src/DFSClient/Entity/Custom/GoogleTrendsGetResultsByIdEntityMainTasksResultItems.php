<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleTrendsGetResultsByIdEntityMainTasksResultItemsData;

#[\AllowDynamicProperties]
class GoogleTrendsGetResultsByIdEntityMainTasksResultItems 
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
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|array $keywords;
    */
    public $keywords = null;

    /**
    * array|GoogleTrendsGetResultsByIdEntityMainTasksResultItemsData[] $data;
    */
    public $data = [];

    /**
    * @var null|array $averages;
    */
    public $averages = null;
 
}