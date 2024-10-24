<?php

namespace DFSClientV3\Models\KeywordsDataApi\Audience_Estimation;

use DFSClientV3\Entity\Custom\AudienceEstimationIndustriesEntityMain;
use DFSClientV3\Models\AbstractModel;

class AudienceEstimationIndustries extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/audience_estimation/industries';

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
     * @return AudienceEstimationIndustriesEntityMain
     */
    #[\Override]
    public function get(): AudienceEstimationIndustriesEntityMain
    {
        return parent::get();
    }
}
