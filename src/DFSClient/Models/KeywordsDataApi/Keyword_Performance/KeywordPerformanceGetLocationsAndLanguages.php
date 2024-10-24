<?php

namespace DFSClientV3\Models\KeywordsDataApi\Keyword_Performance;

use DFSClientV3\Entity\Custom\KeywordPerformanceGetLocationsAndLanguagesEntityMain;
use DFSClientV3\Models\AbstractModel;

class KeywordPerformanceGetLocationsAndLanguages extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/keyword_performance/locations_and_languages';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $seName
     *
     * @return $this
     */
    public function setSe(string $seName = 'bing')
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);

        return $this;
    }

    /**
     * @return KeywordPerformanceGetLocationsAndLanguagesEntityMain
     */
    #[\Override]
    public function get(): KeywordPerformanceGetLocationsAndLanguagesEntityMain
    {
        return parent::get();
    }
}
