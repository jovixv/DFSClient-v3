<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleHistoricalKeywordDataLiveEntityMainTasksResultItemsHistory;

#[\AllowDynamicProperties]
class GoogleHistoricalKeywordDataLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var array|GoogleHistoricalKeywordDataLiveEntityMainTasksResultItemsHistory[] $history;
    */
    public $history = [];
 
}