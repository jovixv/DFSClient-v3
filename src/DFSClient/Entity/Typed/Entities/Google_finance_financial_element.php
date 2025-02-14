<?php

namespace DFSClientV3\Entity\Typed\Entities;

use DFSClientV3\Entity\Typed\Abstracts\EntityWithType;

#[\AllowDynamicProperties]
class Google_finance_financial_element extends EntityWithType
{
	/**
	 * @var null|string $timestamp;
	 */
	public $timestamp = null;

	/**
	 * @var null|integer $revenue;
	 */
	public $revenue = null;

	/**
	 * @var null|integer $revenue_delta;
	 */
	public $revenue_delta = null;

	/**
	 * @var null|integer $operating_expense;
	 */
	public $operating_expense = null;

	/**
	 * @var null|integer $operating_expense_delta;
	 */
	public $operating_expense_delta = null;

	/**
	 * @var null|integer $net_income;
	 */
	public $net_income = null;

	/**
	 * @var null|integer $net_income_delta;
	 */
	public $net_income_delta = null;

	/**
	 * @var null|integer $net_profit_margin;
	 */
	public $net_profit_margin = null;

	/**
	 * @var null|integer $net_profit_margin_delta;
	 */
	public $net_profit_margin_delta = null;

	/**
	 * @var null|integer $earnings_per_share;
	 */
	public $earnings_per_share = null;

	/**
	 * @var null|integer $earnings_per_share_delta;
	 */
	public $earnings_per_share_delta = null;

	/**
	 * @var null|integer $ebitda;
	 */
	public $ebitda = null;

	/**
	 * @var null|integer $ebitda_delta;
	 */
	public $ebitda_delta = null;

	/**
	 * @var null|integer $effective_tax_rate;
	 */
	public $effective_tax_rate = null;

	/**
	 * @var null|integer $cash_and_short_term_investments;
	 */
	public $cash_and_short_term_investments = null;

	/**
	 * @var null|integer $cash_and_short_term_investments_delta;
	 */
	public $cash_and_short_term_investments_delta = null;

	/**
	 * @var null|integer $total_assets;
	 */
	public $total_assets = null;

	/**
	 * @var null|integer $total_assets_delta;
	 */
	public $total_assets_delta = null;

	/**
	 * @var null|integer $total_liabilities;
	 */
	public $total_liabilities = null;

	/**
	 * @var null|integer $total_liabilities_delta;
	 */
	public $total_liabilities_delta = null;

	/**
	 * @var null|integer $total_equity;
	 */
	public $total_equity = null;

	/**
	 * @var null|integer $shares_outstanding;
	 */
	public $shares_outstanding = null;

	/**
	 * @var null|integer $price_to_book;
	 */
	public $price_to_book = null;

	/**
	 * @var null|integer $return_on_assets;
	 */
	public $return_on_assets = null;

	/**
	 * @var null|integer $return_on_capital;
	 */
	public $return_on_capital = null;

	/**
	 * @var null|integer $cash_from_operations;
	 */
	public $cash_from_operations = null;

	/**
	 * @var null|integer $cash_from_operations_delta;
	 */
	public $cash_from_operations_delta = null;

	/**
	 * @var null|integer $cash_from_investing;
	 */
	public $cash_from_investing = null;

	/**
	 * @var null|integer $cash_from_investing_delta;
	 */
	public $cash_from_investing_delta = null;

	/**
	 * @var null|integer $cash_from_financing;
	 */
	public $cash_from_financing = null;

	/**
	 * @var null|integer $cash_from_financing_delta;
	 */
	public $cash_from_financing_delta = null;

	/**
	 * @var null|integer $net_change_in_cash;
	 */
	public $net_change_in_cash = null;

	/**
	 * @var null|integer $net_change_in_cash_delta;
	 */
	public $net_change_in_cash_delta = null;

	/**
	 * @var null|integer $free_cash_flow;
	 */
	public $free_cash_flow = null;

	/**
	 * @var null|integer $free_cash_flow_delta;
	 */
	public $free_cash_flow_delta = null;

}
