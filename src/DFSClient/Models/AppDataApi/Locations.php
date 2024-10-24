<?php

namespace DFSClientV3\Models\AppDataApi;

use DFSClientV3\Entity\Custom\LocationsEntityMain;
use DFSClientV3\Models\AbstractModel;

class Locations extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'app_data/{$se}/locations';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $seName
     *
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);

        return $this;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry(string $country)
    {
        $this->requestToFunction .= '/{$country}';
        $this->requestToFunction = str_replace('{$country}', $country, $this->requestToFunction);

        return $this;
    }

    /**
     * @return LocationsEntityMain
     */
    #[\Override]
    public function get(): LocationsEntityMain
    {
        return parent::get();
    }
}
