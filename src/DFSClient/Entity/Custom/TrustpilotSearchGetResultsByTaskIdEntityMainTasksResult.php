<?php

namespace DFSClientV3\Entity\Custom;


class TrustpilotSearchGetResultsByTaskIdEntityMainTasksResult 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|string $se_domain;
    */
    public $se_domain = null;

    /**
    * @var null|string $check_url;
    */
    public $check_url = null;

    /**
    * @var null|string $datetime;
    */
    public $datetime = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|TrustpilotSearchGetResultsByTaskIdEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}