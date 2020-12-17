<?php


namespace DFSClientV3\Models\SerpApi\Reviews;


use DFSClientV3\Models\AbstractModel;

class ReviewsLocations extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'reviews/{$se}/locations';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\ReviewsLocationsEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\ReviewsLocationsEntityMain
    {
        return parent::get();
    }

}
