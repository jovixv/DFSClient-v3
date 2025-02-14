<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Typed\Entities\Google_finance_asset_pair_element;
use DFSClientV3\Entity\Typed\Entities\Google_finance_market_index_element;
use DFSClientV3\Entity\Typed\Entities\Google_finance_market_instrument_element;

#[\AllowDynamicProperties]
class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsGoogle_finance_newsItems
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
	 * @var null|Google_finance_asset_pair_element|Google_finance_market_index_element|Google_finance_market_instrument_element $quotes;
	 */
	public $quotes = null;

}
