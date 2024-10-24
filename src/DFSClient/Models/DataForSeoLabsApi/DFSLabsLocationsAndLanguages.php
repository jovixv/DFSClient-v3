<?php

namespace DFSClientV3\Models\DataForSeoLabsApi;

use DFSClientV3\Entity\Custom\DFSLabsLocationsAndLanguagesEntityMain;
use DFSClientV3\Models\AbstractModel;

class DFSLabsLocationsAndLanguages extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'dataforseo_labs/locations_and_languages';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return DFSLabsLocationsAndLanguagesEntityMain
     */
    #[\Override]
    public function get(): DFSLabsLocationsAndLanguagesEntityMain
    {
        return parent::get();
    }
}
