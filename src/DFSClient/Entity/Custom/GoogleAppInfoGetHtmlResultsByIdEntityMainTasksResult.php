<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class GoogleAppInfoGetHtmlResultsByIdEntityMainTasksResult 
{    
    /**
    * @var null|string $app_id;
    */
    public $app_id = null;

    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|string $se_domain;
    */
    public $se_domain = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|string $datetime;
    */
    public $datetime = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|GoogleAppInfoGetHtmlResultsByIdEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}