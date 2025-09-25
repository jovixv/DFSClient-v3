<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Typed\Entities\Google_finance_asset_pair_element;
use DFSClientV3\Entity\Typed\Entities\Google_finance_market_index_element;
use DFSClientV3\Entity\Typed\Entities\Google_finance_market_instrument_element;

#[\AllowDynamicProperties]
class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsGoogle_finance_compare_to
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
	 * @var null|integer $page;
	 */
	public $page = null;

	/**
	 * @var null|Google_finance_asset_pair_element[]|Google_finance_market_index_element[]|Google_finance_market_instrument_element[] $items;
	 */
	public $items = null;

}
