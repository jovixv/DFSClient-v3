<?php

namespace DFSClientV3\Entity\Custom;

/**
 * Class DataforseoTrendsDemographyLiveEntityMainTasksResultItemsDemography_comparisonAge
 *
 * @property array $18-24 Age group 18-24
 * @property array $25-34 Age group 25-34
 * @property array $35-44 Age group 35-44
 * @property array $45-54 Age group 45-54
 * @property array $55-64 Age group 55-64
 */
#[\AllowDynamicProperties]
class DataforseoTrendsDemographyLiveEntityMainTasksResultItemsDemography_comparisonAge 
{
	private $data = [];

	public function __get($name)
	{
		return $this->data[$name] ?? null;
	}

	public function __set($name, $value)
	{
		$this->data[$name] = $value;
	}
 
}
