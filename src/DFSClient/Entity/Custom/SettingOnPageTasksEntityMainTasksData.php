<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TagsData;

class SettingOnPageTasksEntityMainTasksData
{
    /**
     * @var null|string;
     */
    public $api = null;

    /**
     * @var null|string;
     */
    public $function = null;

    /**
     * @var null|string;
     */
    public $target = null;

    /**
     * @var null|integer;
     */
    public $max_crawl_pages = null;

    /**
     * @var TagsData
     */
    public $tag = null;
}
