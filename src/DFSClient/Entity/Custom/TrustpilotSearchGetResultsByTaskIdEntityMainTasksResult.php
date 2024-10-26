<?php

namespace DFSClientV3\Entity\Custom;

class TrustpilotSearchGetResultsByTaskIdEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $keyword = null;

    /**
     * @var null|string;
     */
    public $se_domain = null;

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
    public $items_count = null;

    /**
     * @var array|TrustpilotSearchGetResultsByTaskIdEntityMainTasksResultItems[];
     */
    public $items = [];
}
