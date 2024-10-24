<?php

namespace DFSClientV3\Entity\Custom;

class AmazonRankedKeywordsLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $se_type = null;

    /**
     * @var null|string;
     */
    public $asin = null;

    /**
     * @var null|integer;
     */
    public $location_code = null;

    /**
     * @var null|string;
     */
    public $language_code = null;

    /**
     * @var null|integer;
     */
    public $total_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|AmazonRankedKeywordsLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
