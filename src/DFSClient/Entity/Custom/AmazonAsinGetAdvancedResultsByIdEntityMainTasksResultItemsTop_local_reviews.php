<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsTop_local_reviewsImages;
use DFSClientV3\Entity\Custom\AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsTop_local_reviewsVideos;
use DFSClientV3\Entity\Custom\AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsTop_local_reviewsUser_profile;
use DFSClientV3\Entity\Custom\AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsTop_local_reviewsRating;

#[\AllowDynamicProperties]
class AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsTop_local_reviews 
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
    * @var null|string $xpath;
    */
    public $xpath = null;

    /**
    * @var null|boolean $verified;
    */
    public $verified = null;

    /**
    * @var null|string $subtitle;
    */
    public $subtitle = null;

    /**
    * @var null|NULL $helpful_votes;
    */
    public $helpful_votes = null;

    /**
    * @var array|AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsTop_local_reviewsImages[] $images;
    */
    public $images = [];

    /**
    * @var array|AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsTop_local_reviewsVideos[] $videos;
    */
    public $videos = [];

    /**
    * @var null|AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsTop_local_reviewsUser_profile $user_profile;
    */
    public $user_profile = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var null|string $review_text;
    */
    public $review_text = null;

    /**
    * @var null|NULL $publication_date;
    */
    public $publication_date = null;

    /**
    * @var null|AmazonAsinGetAdvancedResultsByIdEntityMainTasksResultItemsTop_local_reviewsRating $rating;
    */
    public $rating = null;
 
}