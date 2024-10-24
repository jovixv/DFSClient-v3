<?php

namespace DFSClientV3\Models\KeywordsDataApi\Google_Ads;

use DFSClientV3\Entity\Custom\GoogleAdsLanguagesEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleAdsLanguages extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/languages';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $seName
     *
     * @return $this
     */
    public function setSe(string $seName = 'google')
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);

        return $this;
    }

    /**
     * @return GoogleAdsLanguagesEntityMain
     */
    #[\Override]
    public function get(): GoogleAdsLanguagesEntityMain
    {
        return parent::get();
    }
}
