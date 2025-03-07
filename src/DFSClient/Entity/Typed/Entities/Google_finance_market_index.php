<?php

namespace DFSClientV3\Entity\Typed\Entities;

use DFSClientV3\Entity\Typed\Entities\Base\Base_google_finance_market_index;

#[\AllowDynamicProperties]
class Google_finance_market_index extends Base_google_finance_market_index
{
	/**
	 * @var null|integer $rank_group;
	 */
	public $rank_group = null;

	/**
	 * @var null|integer $rank_absolute;
	 */
	public $rank_absolute = null;

}
