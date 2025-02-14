<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Typed\Entities\Google_finance_asset_pair_element;
use DFSClientV3\Entity\Typed\Entities\Google_finance_market_index_element;
use DFSClientV3\Entity\Typed\Entities\Google_finance_market_instrument_element;

#[\AllowDynamicProperties]
class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsGoogle_finance_hero_groupsMarkets
{
	/**
	 * @var null|string $market;
	 */
	public $market = null;

	/**
	 * @var null|Google_finance_asset_pair_element[]|Google_finance_market_index_element[]|Google_finance_market_instrument_element[] $items;
	 */
	public $items = null;

}
