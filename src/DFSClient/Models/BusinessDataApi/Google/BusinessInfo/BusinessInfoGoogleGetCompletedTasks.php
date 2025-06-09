<?php


namespace DFSClientV3\Models\BusinessDataApi\Google\BusinessInfo;


use DFSClientV3\Models\AbstractModel;

class BusinessInfoGoogleGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'business_data/google/my_business_info/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\BusinessInfoGoogleGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\BusinessInfoGoogleGetCompletedTasksEntityMain
    {
        return parent::get();
    }

}
