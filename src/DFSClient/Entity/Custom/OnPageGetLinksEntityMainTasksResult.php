<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetLinksEntityMainTasksResultItemsAlternate;
use DFSClientV3\Entity\Custom\OnPageGetLinksEntityMainTasksResultItemsAnchor;
use DFSClientV3\Entity\Custom\OnPageGetLinksEntityMainTasksResultItemsCanonical;
use DFSClientV3\Entity\Custom\OnPageGetLinksEntityMainTasksResultItemsImage;
use DFSClientV3\Entity\Custom\OnPageGetLinksEntityMainTasksResultItemsLink;
use DFSClientV3\Entity\Custom\OnPageGetLinksEntityMainTasksResultItemsMeta;
use DFSClientV3\Entity\Custom\OnPageGetLinksEntityMainTasksResultItemsRedirect;

class OnPageGetLinksEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $crawl_progress = null;

    /**
     * @var null|integer;
     */
    public $total_items_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|OnPageGetLinksEntityMainTasksResultItemsImage[]|OnPageGetLinksEntityMainTasksResultItemsAnchor[]|OnPageGetLinksEntityMainTasksResultItemsAlternate[]|OnPageGetLinksEntityMainTasksResultItemsRedirect[]|OnPageGetLinksEntityMainTasksResultItemsCanonical[]|OnPageGetLinksEntityMainTasksResultItemsMeta[]|OnPageGetLinksEntityMainTasksResultItemsLink[];
     */
    public $items = [];
}
