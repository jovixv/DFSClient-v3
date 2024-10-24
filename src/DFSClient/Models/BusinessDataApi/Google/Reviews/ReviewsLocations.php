<?php

namespace DFSClientV3\Models\BusinessDataApi\Google\Reviews;

use DFSClientV3\Entity\Custom\ReviewsLocationsEntityMain;
use DFSClientV3\Models\AbstractModel;

class ReviewsLocations extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'business_data/google/locations';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @deprecated This method is not necessary, only 'google'.
     *
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
     * @return ReviewsLocationsEntityMain
     */
    #[\Override]
    public function get(): ReviewsLocationsEntityMain
    {
        return parent::get();
    }
}
