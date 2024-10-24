<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\QuestionsAndAnswersLiveEntityMainTasksResultItems_without_answers;

class QuestionsAndAnswersLiveEntityMainTasksResult
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
     * @var null|string;
     */
    public $cid = null;

    /**
     * @var null|string;
     */
    public $feature_id = null;

    /**
     * @var null|array;
     */
    public $item_types = null;

    /**
     * @var array|QuestionsAndAnswersLiveEntityMainTasksResultItems_without_answers[];
     */
    public $items_without_answers = [];

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|QuestionsAndAnswersLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
