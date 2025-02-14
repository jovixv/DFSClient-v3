<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Typed\Entities\Google_finance_financial_element;

#[\AllowDynamicProperties]
class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsGoogle_finance_financial
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
	 * @var null|Google_finance_financial_element[] $quarterly_metrics;
	 */
	public $quarterly_metrics = null;

	/**
	 * @var null|Google_finance_financial_element[] $annual_metrics;
	 */
	public $annual_metrics = null;

}
