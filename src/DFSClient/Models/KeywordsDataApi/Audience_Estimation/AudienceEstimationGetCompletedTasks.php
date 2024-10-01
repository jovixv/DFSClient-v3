<?php

namespace DFSClientV3\Models\KeywordsDataApi\Audience_Estimation;

use DFSClientV3\Models\AbstractModel;

class AudienceEstimationGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/audience_estimation/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * 'bing' only
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\AudienceEstimationGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\AudienceEstimationGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
