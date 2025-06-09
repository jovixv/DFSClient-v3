<?php


namespace DFSClientV3\Models\BusinessDataApi\Google\BusinessUpdates;


use DFSClientV3\Models\AbstractModel;

class BusinessUpdatesGoogleGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'business_data/google/my_business_updates/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\BusinessUpdatesGoogleGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\BusinessUpdatesGoogleGetCompletedTasksEntityMain
    {
        return parent::get();
    }

}
