<?php

namespace DFSClientV3\Models\KeywordsDataApi\Audience_Estimation;

use DFSClientV3\Entity\Custom\AudienceEstimationGetResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class AudienceEstimationGetResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/audience_estimation/task_get/{$taskUUID}';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @param string $taskUUID
     *
     * @return $this
     */
    public function setTaskId(string $taskUUID)
    {
        $this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);

        return $this;
    }

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
     * @return AudienceEstimationGetResultsByIdEntityMain
     */
    #[\Override]
    public function get(): AudienceEstimationGetResultsByIdEntityMain
    {
        return parent::get();
    }
}
