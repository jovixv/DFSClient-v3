<?php


namespace DFSClientV3\Models\KeywordsDataApi\Google_Trends;


use DFSClientV3\Models\AbstractModel;

class GoogleTrendsLocations extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/google_trends/locations/{$country}';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country)
    {
        $this->requestToFunction = str_replace('{$country}', $country, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleTrendsLocationsEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleTrendsLocationsEntityMain
    {
        return parent::get();
    }
}