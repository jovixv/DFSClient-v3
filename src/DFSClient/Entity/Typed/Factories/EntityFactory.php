<?php

namespace DFSClientV3\Entity\Typed\Factories;

use DFSClientV3\Entity\Typed\Abstracts\EntityWithType;

class EntityFactory
{
	//automatically finds classes by 'type' field, but you can specify custom name
	protected static $typeMap = [
		//'google_finance_asset_pair_element' => Google_finance_asset_pair_element::class,
		//'google_finance_market_index_element' => Google_finance_market_index_element::class,
		//'google_finance_market_instrument_element' => Google_finance_market_instrument_element::class,
	];

	public static function create(string $type): ?EntityWithType
	{
		if (isset(self::$typeMap[$type])) {
			return new self::$typeMap[$type]();
		}

		$className = 'DFSClientV3\\Entity\\Typed\\Entities\\' . ucfirst($type);

		if (class_exists($className)) {
			return new $className();
		}

		return null;
	}
}
