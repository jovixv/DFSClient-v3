<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsAttributesAvailable_attributes;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsAttributesUnavailable_attributes;

#[\AllowDynamicProperties]
class BusinessListingsSearchLiveEntityMainTasksResultItemsAttributes 
{    
    /**
    * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsAttributesAvailable_attributes $available_attributes;
    */
    public $available_attributes = null;

    /**
    * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsAttributesUnavailable_attributes $unavailable_attributes;
    */
    public $unavailable_attributes = null;
 
}