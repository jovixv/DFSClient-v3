<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsQuestions_and_answersRectangle;

#[\AllowDynamicProperties]
class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsQuestions_and_answers 
{    
    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|integer $rank_group;
    */
    public $rank_group = null;

    /**
    * @var null|integer $rank_absolute;
    */
    public $rank_absolute = null;

		/**
		 * @var null|integer $page;
		 */
		public $page = null;

    /**
    * @var null|string $position;
    */
    public $position = null;

    /**
    * @var null|string $xpath;
    */
    public $xpath = null;

    /**
    * @var array|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsQuestions_and_answersItems[] $items;
    */
    public $items = [];

    /**
    * @var null|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsQuestions_and_answersRectangle $rectangle;
    */
    public $rectangle = null;
 
}
