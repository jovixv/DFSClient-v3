<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetSummaryByIdEntityMainTasksResultDomain_infoChecks;
use DFSClientV3\Entity\Custom\OnPageGetSummaryByIdEntityMainTasksResultDomain_infoSsl_info;

class OnPageGetSummaryByIdEntityMainTasksResultDomain_info
{
    /**
     * @var null|string;
     */
    public $name = null;

    /**
     * @var null|string;
     */
    public $cms = null;

    /**
     * @var null|string;
     */
    public $ip = null;

    /**
     * @var null|string;
     */
    public $server = null;

    /**
     * @var null|string;
     */
    public $crawl_start = null;

    /**
     * @var null|string;
     */
    public $crawl_end = null;

    /**
     * @var null|string;
     */
    public $crawl_progress = null;

    /**
     * @var null|OnPageGetSummaryByIdEntityMainTasksResultDomain_infoSsl_info;
     */
    public $ssl_info = null;

    /**
     * @var null|OnPageGetSummaryByIdEntityMainTasksResultDomain_infoChecks;
     */
    public $checks = null;

    /**
     * @var null|integer;
     */
    public $total_pages = null;

    /**
     * @var null|integer;
     */
    public $page_not_found_status_code = null;

    /**
     * @var null|integer;
     */
    public $canonicalization_status_code = null;

    /**
     * @var null|integer;
     */
    public $directory_browsing_status_code = null;
}
