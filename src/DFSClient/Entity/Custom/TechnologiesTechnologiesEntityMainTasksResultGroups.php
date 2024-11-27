<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TechnologiesTechnologiesEntityMainTasksResultGroupsCategories;

#[\AllowDynamicProperties]
class TechnologiesTechnologiesEntityMainTasksResultGroups 
{    
    /**
    * @var null|string $id;
    */
    public $id = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var array|TechnologiesTechnologiesEntityMainTasksResultGroupsCategories[] $categories;
    */
    public $categories = [];
 
}