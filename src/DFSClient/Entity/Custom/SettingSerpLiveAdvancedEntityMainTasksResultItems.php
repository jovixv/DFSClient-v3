<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsExtra;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsLinks;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsRectangle;

class SettingSerpLiveAdvancedEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|integer;
     */
    public $rank_group = null;

    /**
     * @var null|integer;
     */
    public $rank_absolute = null;

    /**
     * @var null|string;
     */
    public $position = null;

    /**
     * @var null|string;
     */
    public $xpath = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|string;
     */
    public $domain = null;

    /**
     * @var null|string;
     */
    public $breadcrumb = null;

    /**
     * @var null|string;
     */
    public $url = null;

    /**
     * @var null|array;
     */
    public $highlighted = null;

    /**
     * @var null|SettingSerpLiveAdvancedEntityMainTasksResultItemsExtra;
     */
    public $extra = null;

    /**
     * @var null|string;
     */
    public $description = null;

    /**
     * @var null|array;
     */
    public $description_rows = null;

    /**
     * @var array|SettingSerpLiveAdvancedEntityMainTasksResultItemsLinks[];
     */
    public $links = [];

    /**
     * @var null|SettingSerpLiveAdvancedEntityMainTasksResultItemsRectangle;
     */
    public $rectangle = null;
}
