<?php


namespace DFSClientV3\Models\SerpApi;


use DFSClientV3\Models\AbstractModel;

class Locations extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'serp/{$se}/locations';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * The 'google/events' se name ('serp/google/events/locations' endpoints) is deprecated and will be removed in a future release.
     *
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        if ($seName === 'google/events')
            trigger_error("The 'serp/google/events' endpoints are deprecated and will be removed in a future release. Do not use the 'google/events' se name.", E_USER_DEPRECATED);

        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country)
    {
	    $this->requestToFunction .= "/" . $country;
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\LocationsEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\LocationsEntityMain
    {
        return parent::get();
    }
}
