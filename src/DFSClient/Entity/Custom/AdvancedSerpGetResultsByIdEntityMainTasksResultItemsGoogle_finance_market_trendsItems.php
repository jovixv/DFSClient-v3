<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Typed\Entities\Google_finance_market_trends_element;

#[\AllowDynamicProperties]
class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsGoogle_finance_market_trendsItems
{
	/**
	 * @var null|Google_finance_market_trends_element[] $most_active;
	 */
	public $most_active = null;

	/**
	 * @var null|Google_finance_market_trends_element[] $gainers;
	 */
	public $gainers = null;

	/**
	 * @var null|Google_finance_market_trends_element[] $losers;
	 */
	public $losers = null;
}
