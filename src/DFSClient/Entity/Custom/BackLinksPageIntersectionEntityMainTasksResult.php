<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Models\BacklinksApi\Dictionaries\PageIntersectionDictionary;

class BackLinksPageIntersectionEntityMainTasksResult 
{    
    /**
    * @var null|array $targets;
    */
    public $targets = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|\DFSClientV3\Models\BacklinksApi\Dictionaries\PageIntersectionDictionary[] $items;
    */
    public $items = [];
 
}