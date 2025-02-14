<?php

namespace DFSClientV3\Entity\Typed\Entities;

use DFSClientV3\Entity\Typed\Abstracts\EntityWithType;

#[\AllowDynamicProperties]
class Google_finance_market_trends_element extends EntityWithType
{
	/**
	 * @var null|Google_finance_asset_pair_element|Google_finance_market_index_element|Google_finance_market_instrument_element $quote;
	 */
	public $quote = null;

	/**
	 * @var null|Google_finance_news_element[] $news;
	 */
	public $news = null;

}
