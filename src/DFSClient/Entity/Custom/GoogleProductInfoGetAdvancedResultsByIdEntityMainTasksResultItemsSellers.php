<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellersDelivery_info;
use DFSClientV3\Entity\Custom\GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellersPrice;
use DFSClientV3\Entity\Custom\GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellersSeller_rating;

class GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellers
{
    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|string;
     */
    public $url = null;

    /**
     * @var null|GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellersSeller_rating;
     */
    public $seller_rating = null;

    /**
     * @var null|integer;
     */
    public $seller_review_count = null;

    /**
     * @var null|GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellersPrice;
     */
    public $price = null;

    /**
     * @var null|GoogleProductInfoGetAdvancedResultsByIdEntityMainTasksResultItemsSellersDelivery_info;
     */
    public $delivery_info = null;
}
