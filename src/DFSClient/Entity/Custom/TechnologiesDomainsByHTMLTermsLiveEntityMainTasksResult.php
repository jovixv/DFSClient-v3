<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TechnologiesDomainsByHTMLTermsLiveEntityMainTasksResultItems;

class TechnologiesDomainsByHTMLTermsLiveEntityMainTasksResult
{
    /**
     * @var null|integer;
     */
    public $total_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var null|integer;
     */
    public $offset = null;

    /**
     * @var null|string;
     */
    public $offset_token = null;

    /**
     * @var array|TechnologiesDomainsByHTMLTermsLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
