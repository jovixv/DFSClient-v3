<?php

namespace DFSClientV3\Entity\Custom;

class GetSerpResultsByTaskIdEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $keyword = null;

    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|string;
     */
    public $se_domain = null;

    /**
     * @var null|integer;
     */
    public $location_code = null;

    /**
     * @var null|string;
     */
    public $language_code = null;

    /**
     * @var null|string;
     */
    public $check_url = null;

    /**
     * @var null|string;
     */
    public $datetime = null;

    /**
     * @var null|GetSerpResultsByTaskIdEntityMainTasksResultSpell;
     */
    public $spell = null;

    /**
     * @var null|array;
     */
    public $item_types = null;

    /**
     * @var null|integer;
     */
    public $se_results_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * array|GetSerpResultsByTaskIdEntityMainTasksResultItems[] $items;.
     */
    public $items = [];
}
