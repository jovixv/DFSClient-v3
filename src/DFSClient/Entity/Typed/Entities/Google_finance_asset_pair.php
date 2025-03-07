<?php

namespace DFSClientV3\Entity\Typed\Entities;

use DFSClientV3\Entity\Typed\Entities\Base\Base_google_finance_asset_pair;

#[\AllowDynamicProperties]
class Google_finance_asset_pair extends Base_google_finance_asset_pair
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
