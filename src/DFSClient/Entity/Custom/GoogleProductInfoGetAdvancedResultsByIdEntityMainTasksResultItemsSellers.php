<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellersSeller_rating;
use DFSClientV3\Entity\Custom\GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellersPrice;
use DFSClientV3\Entity\Custom\GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellersDelivery_info;

#[\AllowDynamicProperties]
class GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellers 
{    
    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var null|GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellersSeller_rating $seller_rating;
    */
    public $seller_rating = null;

    /**
    * @var null|integer $seller_review_count;
    */
    public $seller_review_count = null;

    /**
    * @var null|GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellersPrice $price;
    */
    public $price = null;

    /**
    * @var null|GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellersDelivery_info $delivery_info;
    */
    public $delivery_info = null;
 
}