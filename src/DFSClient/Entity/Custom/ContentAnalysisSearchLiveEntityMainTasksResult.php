<?php

namespace DFSClientV3\Entity\Custom;


class ContentAnalysisSearchLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $offset_token;
    */
    public $offset_token = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|ContentAnalysisSearchLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}