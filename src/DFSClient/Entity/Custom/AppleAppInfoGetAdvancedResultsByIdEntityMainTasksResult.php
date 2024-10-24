<?php

namespace DFSClientV3\Entity\Custom;

class AppleAppInfoGetAdvancedResultsByIdEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $app_id = null;

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
     * @var null|integer;
     */
    public $se_results_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|AppleAppInfoGetAdvancedResultsByIdEntityMainTasksResultItems[];
     */
    public $items = [];
}
