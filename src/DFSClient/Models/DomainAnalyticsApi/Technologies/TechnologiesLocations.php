<?php

namespace DFSClientV3\Models\DomainAnalyticsApi\Technologies;

use DFSClientV3\Entity\Custom\TechnologiesLocationsEntityMain;
use DFSClientV3\Models\AbstractModel;

class TechnologiesLocations extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'domain_analytics/technologies/locations';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return TechnologiesLocationsEntityMain
     */
    #[\Override]
    public function get(): TechnologiesLocationsEntityMain
    {
        return parent::get();
    }
}
