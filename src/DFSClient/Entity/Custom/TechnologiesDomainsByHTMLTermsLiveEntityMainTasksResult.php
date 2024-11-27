<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TechnologiesDomainsByHTMLTermsLiveEntityMainTasksResultItems;

#[\AllowDynamicProperties]
class TechnologiesDomainsByHTMLTermsLiveEntityMainTasksResult 
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
    * @var array|TechnologiesDomainsByHTMLTermsLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}