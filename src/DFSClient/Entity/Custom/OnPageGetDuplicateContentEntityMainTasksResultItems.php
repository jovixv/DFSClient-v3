<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetDuplicateContentEntityMainTasksResultItemsPages;

class OnPageGetDuplicateContentEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $url = null;

    /**
     * @var null|integer;
     */
    public $total_count = null;

    /**
     * @var array|OnPageGetDuplicateContentEntityMainTasksResultItemsPages[];
     */
    public $pages = [];
}
