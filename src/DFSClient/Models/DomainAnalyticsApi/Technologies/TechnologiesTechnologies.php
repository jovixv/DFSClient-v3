<?php

namespace DFSClientV3\Models\DomainAnalyticsApi\Technologies;

use DFSClientV3\Entity\Custom\TechnologiesTechnologiesEntityMain;
use DFSClientV3\Models\AbstractModel;

class TechnologiesTechnologies extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'domain_analytics/technologies/technologies';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return TechnologiesTechnologiesEntityMain
     */
    #[\Override]
    public function get(): TechnologiesTechnologiesEntityMain
    {
        return parent::get();
    }
}
