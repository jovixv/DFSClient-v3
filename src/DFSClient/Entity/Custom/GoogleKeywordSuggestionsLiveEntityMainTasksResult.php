<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_data;

class GoogleKeywordSuggestionsLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $se_type = null;

    /**
     * @var null|string;
     */
    public $seed_keyword = null;

    /**
     * @var null|GoogleKeywordSuggestionsLiveEntityMainTasksResultSeed_keyword_data;
     */
    public $seed_keyword_data = null;

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
     * @var null|integer;
     */
    public $offset = null;

    /**
     * @var null|string;
     */
    public $offset_token = null;

    /**
     * @var array|GoogleKeywordSuggestionsLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
