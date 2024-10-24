<?php

namespace DFSClientV3\Entity\Custom;

class KeywordSuggestionsLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $seed_keyword = null;

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
     * array|KeywordSuggestionsLiveEntityMainTasksResultItems[] $items;.
     */
    public $items = [];
}
