<?php


namespace DFSClientV3\Models\MerchantApi\Google\Sellers;


use DFSClientV3\Models\AbstractModel;

class GoogleSellersGetAdUrl extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->0->result';
	protected $requestToFunction = 'merchant/google/sellers/ad_url/{$ad_aclk}';
	protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $taskUUID
     * @return $this
     */
	public function setAdAclk(string $ad_aclk)
	{
		$this->requestToFunction = str_replace('{$ad_aclk}', $ad_aclk, $this->requestToFunction);
		return $this;
	}
	
	/**
	 * @return \DFSClientV3\Entity\Custom\GoogleSellersGetAdUrlEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\GoogleSellersGetAdUrlEntityMain
	{
		return parent::get();
	}
}