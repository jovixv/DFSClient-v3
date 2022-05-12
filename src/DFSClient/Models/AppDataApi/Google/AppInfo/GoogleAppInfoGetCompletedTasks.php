<?php

namespace DFSClientV3\Models\AppDataApi\Google\AppInfo;


use DFSClientV3\Models\AbstractModel;

class GoogleAppInfoGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->0->result';
    protected $requestToFunction = 'app_data/google/app_info/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleAppInfoGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleAppInfoGetCompletedTasksEntityMain
    {
        return parent::get();
    }
}
