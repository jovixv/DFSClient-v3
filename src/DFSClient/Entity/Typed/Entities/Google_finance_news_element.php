<?php

namespace DFSClientV3\Entity\Typed\Entities;

use DFSClientV3\Entity\Typed\Abstracts\EntityWithType;

#[\AllowDynamicProperties]
class Google_finance_news_element extends EntityWithType
{
	/**
	 * @var null|string $title;
	 */
	public $title = null;

	/**
	 * @var null|string $url;
	 */
	public $url = null;

	/**
	 * @var null|string $source;
	 */
	public $source = null;

	/**
	 * @var null|string $image_url;
	 */
	public $image_url = null;

	/**
	 * @var null|string $timestamp;
	 */
	public $timestamp = null;

	/**
	 * @var null|Google_finance_asset_pair_element[]|Google_finance_market_index_element[]|Google_finance_market_instrument_element[] $quotes;
	 */
	public $quotes = null;

}
