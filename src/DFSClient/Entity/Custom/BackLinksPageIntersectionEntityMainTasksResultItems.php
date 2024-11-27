<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Models\BacklinksApi\Dictionaries\PageIntersectionDictionary;

#[\AllowDynamicProperties]
class BackLinksPageIntersectionEntityMainTasksResultItems 
{    
    /**
    * @var null|PageIntersectionDictionary $page_intersection;
    */
    public $page_intersection = null;

    /**
    * @var null|BackLinksPageIntersectionEntityMainTasksResultItemsSummary $summary;
    */
    public $summary = null;
 
}
