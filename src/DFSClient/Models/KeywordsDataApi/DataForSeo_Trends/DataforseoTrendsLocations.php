<?php

namespace DFSClientV3\Models\KeywordsDataApi\DataForSeo_Trends;

use DFSClientV3\Entity\Custom\DataforseoTrendsLocationsEntityMain;
use DFSClientV3\Models\AbstractModel;

class DataforseoTrendsLocations extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/dataforseo_trends/locations';

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
     * @return DataforseoTrendsLocationsEntityMain
     */
    #[\Override]
    public function get(): DataforseoTrendsLocationsEntityMain
    {
        return parent::get();
    }
}
