<?php

namespace DFSClientV3\Models\KeywordsDataApi\Google_Trends;

use DFSClientV3\Entity\Custom\GoogleTrendsLocationsEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleTrendsLocations extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/google_trends/locations';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry(string $country = null)
    {
        $this->requestToFunction = $country ? $this->requestToFunction . '/' . $country : $this->requestToFunction;

        return $this;
    }

    /**
     * @return GoogleTrendsLocationsEntityMain
     */
    #[\Override]
    public function get(): GoogleTrendsLocationsEntityMain
    {
        return parent::get();
    }
}
