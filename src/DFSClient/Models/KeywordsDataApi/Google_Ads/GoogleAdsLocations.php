<?php


namespace DFSClientV3\Models\KeywordsDataApi\Google_Ads;


use DFSClientV3\Models\AbstractModel;

class GoogleAdsLocations extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/locations';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName = 'google')
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleAdsLocationsEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleAdsLocationsEntityMain
    {
        return parent::get();
    }
}