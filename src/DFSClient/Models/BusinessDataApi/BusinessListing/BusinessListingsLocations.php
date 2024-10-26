<?php

namespace DFSClientV3\Models\BusinessDataApi\BusinessListing;

use DFSClientV3\Entity\Custom\BusinessListingsLocationsEntityMain;
use DFSClientV3\Models\AbstractModel;

class BusinessListingsLocations extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'business_data/business_listings/locations';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return BusinessListingsLocationsEntityMain
     */
    #[\Override]
    public function get(): BusinessListingsLocationsEntityMain
    {
        return parent::get();
    }
}
