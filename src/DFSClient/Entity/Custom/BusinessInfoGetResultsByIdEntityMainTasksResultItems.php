<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsAttributes;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsPeople_also_search;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsWork_time;

class BusinessInfoGetResultsByIdEntityMainTasksResultItems 
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
    * @var null|string $position;
    */
    public $position = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|string $description;
    */
    public $description = null;

    /**
    * @var null|string $category;
    */
    public $category = null;

    /**
    * @var null|array $additional_categories;
    */
    public $additional_categories = null;

    /**
    * @var null|string $cid;
    */
    public $cid = null;

    /**
    * @var null|string $feature_id;
    */
    public $feature_id = null;

    /**
    * @var null|string $address;
    */
    public $address = null;

    /**
    * @var null|string $place_id;
    */
    public $place_id = null;

    /**
    * @var null|string $phone;
    */
    public $phone = null;

    /**
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var null|string $domain;
    */
    public $domain = null;

    /**
    * @var null|string $snippet;
    */
    public $snippet = null;

    /**
    * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsAttributes $attributes;
    */
    public $attributes = null;

    /**
    * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsRating $rating;
    */
    public $rating = null;

    /**
    * array|BusinessInfoGetResultsByIdEntityMainTasksResultItemsPeople_also_search[] $people_also_search;
    */
    public $people_also_search = [];

    /**
    * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsWork_time $work_time;
    */
    public $work_time = null;
    /**
    * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsPopular_times $popular_times;
    */
    public $popular_times = null;

}
