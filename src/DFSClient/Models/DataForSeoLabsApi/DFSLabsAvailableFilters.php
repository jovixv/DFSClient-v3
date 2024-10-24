<?php

namespace DFSClientV3\Models\DataForSeoLabsApi;

use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMain;
use DFSClientV3\Models\AbstractModel;

class DFSLabsAvailableFilters extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'dataforseo_labs/available_filters';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @return DFSLabsAvailableFiltersEntityMain
     */
    #[\Override]
    public function get(): DFSLabsAvailableFiltersEntityMain
    {
        return parent::get();
    }
}
