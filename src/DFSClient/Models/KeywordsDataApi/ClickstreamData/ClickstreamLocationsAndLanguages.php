<?php

namespace DFSClientV3\Models\KeywordsDataApi\ClickstreamData;

use DFSClientV3\Entity\Custom\ClickstreamLocationsAndLanguagesEntityMain;
use DFSClientV3\Models\AbstractModel;

class ClickstreamLocationsAndLanguages extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/clickstream_data/locations_and_languages';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return ClickstreamLocationsAndLanguagesEntityMain
     */
    #[\Override]
    public function get(): ClickstreamLocationsAndLanguagesEntityMain
    {
        return parent::get();
    }
}
