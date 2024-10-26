<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleSearchIntentLiveEntityMainTasksResultItemsSecondary_keyword_intents;

class GoogleSearchIntentLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $keyword = null;

    /**
     * @var null|GoogleSearchIntentLiveEntityMainTasksResultItemsKeyword_intent;
     */
    public $keyword_intent = null;

    /**
     * @var null|GoogleSearchIntentLiveEntityMainTasksResultItemsSecondary_keyword_intents[];
     */
    public $secondary_keyword_intents = null;
}
