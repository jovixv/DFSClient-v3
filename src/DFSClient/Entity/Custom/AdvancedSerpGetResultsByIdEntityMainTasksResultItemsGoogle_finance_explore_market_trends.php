<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Typed\Entities\Google_finance_asset_pair_element;
use DFSClientV3\Entity\Typed\Entities\Google_finance_market_index_element;
use DFSClientV3\Entity\Typed\Entities\Google_finance_market_instrument_element;

#[\AllowDynamicProperties]
class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsGoogle_finance_explore_market_trends
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
	 * @var null|string $title;
	 */
	public $title = null;

	/**
	 * @var null|string $sub_title;
	 */
	public $sub_title = null;

	/**
	 * @var null|string $url;
	 */
	public $url = null;

	/**
	 * @var null|Google_finance_asset_pair_element[]|Google_finance_market_index_element[]|Google_finance_market_instrument_element[] $items;
	 */
	public $items = null;

}
