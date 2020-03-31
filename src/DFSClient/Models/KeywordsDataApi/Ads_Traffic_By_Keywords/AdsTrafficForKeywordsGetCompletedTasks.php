<?php

namespace DFSClientV3\Models\KeywordsDataApi\Ads_Traffic_By_Keywords;


use DFSClientV3\Models\AbstractModel;

class AdsTrafficForKeywordsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/ad_traffic_by_keywords/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName = 'google')
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\AdsTrafficForKeywordsGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\AdsTrafficForKeywordsGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
