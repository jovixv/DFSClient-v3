<?php

namespace DFSClientV3\Models\KeywordsDataApi\Search_Volume_History;

use DFSClientV3\Entity\Custom\SearchVolumeHistoryGetLocationsAndLanguagesEntityMain;
use DFSClientV3\Models\AbstractModel;

class SearchVolumeHistoryGetLocationsAndLanguages extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/search_volume_history/locations_and_languages';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * 'bing' only.
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
     * @return SearchVolumeHistoryGetLocationsAndLanguagesEntityMain
     */
    #[\Override]
    public function get(): SearchVolumeHistoryGetLocationsAndLanguagesEntityMain
    {
        return parent::get();
    }
}
