<?php

namespace DFSClientV3\Models\KeywordsDataApi\Google_Ads;

use DFSClientV3\Entity\Custom\GoogleAdsAdWordsStatusEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleAdsAdWordsStatus extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/adwords_status';

    protected $resultShouldBeTransformedToArray = false;

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
     * @return GoogleAdsAdWordsStatusEntityMain
     */
    #[\Override]
    public function get(): GoogleAdsAdWordsStatusEntityMain
    {
        return parent::get();
    }
}
