<?php

namespace DFSClientV3\Entity\Typed\Entities;

use DFSClientV3\Entity\Typed\Abstracts\EntityWithType;

#[\AllowDynamicProperties]
class Google_finance_market_instrument_element extends EntityWithType
{
	/**
	 * @var null|string $ticker;
	 */
	public $ticker = null;

	/**
	 * @var null|integer $price;
	 */
	public $price = null;

	/**
	 * @var null|integer $price_delta;
	 */
	public $price_delta = null;

	/**
	 * @var null|string $price_currency;
	 */
	public $price_currency = null;

	/**
	 * @var null|string $identifier;
	 */
	public $identifier = null;

	/**
	 * @var null|string $displayed_name;
	 */
	public $displayed_name = null;

	/**
	 * @var null|string $url;
	 */
	public $url = null;

	/**
	 * @var null|string $location;
	 */
	public $location = null;

	/**
	 * @var null|string $trend;
	 */
	public $trend = null;

	/**
	 * @var null|string $timestamp;
	 */
	public $timestamp = null;

	/**
	 * @var null|integer $percentage_delta;
	 */
	public $percentage_delta = null;

}
