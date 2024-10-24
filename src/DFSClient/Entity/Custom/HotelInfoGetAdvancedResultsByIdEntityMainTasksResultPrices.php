<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HotelInfoGetAdvancedResultsByIdEntityMainTasksResultPricesItems;

class HotelInfoGetAdvancedResultsByIdEntityMainTasksResultPrices
{
    /**
     * @var null|integer;
     */
    public $price = null;

    /**
     * @var null|null;
     */
    public $price_without_discount = null;

    /**
     * @var null|string;
     */
    public $currency = null;

    /**
     * @var null|null;
     */
    public $discount_text = null;

    /**
     * @var null|string;
     */
    public $check_in = null;

    /**
     * @var null|string;
     */
    public $check_out = null;

    /**
     * @var null|integer;
     */
    public $visitors = null;

    /**
     * @var array|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultPricesItems[];
     */
    public $items = [];
}
