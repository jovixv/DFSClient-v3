<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class TechnologiesDomainsByTechnologyLiveEntityMainTasksResult 
{    
    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var null|integer $offset;
    */
    public $offset = null;

    /**
    * @var null|string $offset_token;
    */
    public $offset_token = null;

    /**
    * @var array|TechnologiesDomainsByTechnologyLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}