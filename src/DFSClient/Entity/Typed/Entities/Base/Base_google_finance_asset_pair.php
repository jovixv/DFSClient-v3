<?php

namespace DFSClientV3\Entity\Typed\Entities\Base;

use DFSClientV3\Entity\Typed\Abstracts\EntityWithType;

#[\AllowDynamicProperties]
abstract class Base_google_finance_asset_pair extends EntityWithType
{
	/**
	 * @var null|string $base_symbol;
	 */
	public $base_symbol = null;

	/**
	 * @var null|string $quote_symbol;
	 */
	public $quote_symbol = null;

	/**
	 * @var null|string $base_display_name;
	 */
	public $base_display_name = null;

	/**
	 * @var null|string $quote_display_name;
	 */
	public $quote_display_name = null;

	/**
	 * @var null|integer $price;
	 */
	public $price = null;

	/**
	 * @var null|integer $price_delta;
	 */
	public $price_delta = null;

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
