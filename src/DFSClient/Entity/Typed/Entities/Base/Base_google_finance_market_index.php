<?php

namespace DFSClientV3\Entity\Typed\Entities\Base;

use DFSClientV3\Entity\Typed\Abstracts\EntityWithType;

#[\AllowDynamicProperties]
abstract class Base_google_finance_market_index extends EntityWithType
{
	/**
	 * @var null|string $ticker;
	 */
	public $ticker = null;

	/**
	 * @var null|string $market_identifier;
	 */
	public $market_identifier = null;

	/**
	 * @var null|integer $index_value;
	 */
	public $index_value = null;

	/**
	 * @var null|integer $index_value_delta;
	 */
	public $index_value_delta = null;

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
