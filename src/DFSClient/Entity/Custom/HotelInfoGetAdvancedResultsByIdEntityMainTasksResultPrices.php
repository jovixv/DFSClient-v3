<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HotelInfoGetAdvancedResultsByIdEntityMainTasksResultPricesItems;

class HotelInfoGetAdvancedResultsByIdEntityMainTasksResultPrices 
{    
    /**
    * @var null|integer $price;
    */
    public $price = null;

    /**
    * @var null|NULL $price_without_discount;
    */
    public $price_without_discount = null;

    /**
    * @var null|string $currency;
    */
    public $currency = null;

    /**
    * @var null|NULL $discount_text;
    */
    public $discount_text = null;

    /**
    * @var null|string $check_in;
    */
    public $check_in = null;

    /**
    * @var null|string $check_out;
    */
    public $check_out = null;

    /**
    * @var null|integer $visitors;
    */
    public $visitors = null;

    /**
    * @var array|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultPricesItems[] $items;
    */
    public $items = [];
 
}