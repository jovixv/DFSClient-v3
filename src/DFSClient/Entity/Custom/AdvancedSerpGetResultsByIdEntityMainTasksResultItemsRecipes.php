<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsRecipesRectangle;

class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsRecipes
{
    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|integer;
     */
    public $rank_group = null;

    /**
     * @var null|integer;
     */
    public $rank_absolute = null;

    /**
     * @var null|string;
     */
    public $position = null;

    /**
     * @var null|string;
     */
    public $xpath = null;

    /**
     * @var array|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsRecipesItems[];
     */
    public $items = [];

    /**
     * @var null|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsRecipesRectangle;
     */
    public $rectangle = null;
}
